@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body class="h-full" style="background-color: #eae8e0">
    <x-header />
    {{-- Page content --}}
    @section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @auth
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Contribute News</h2>
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                </div>
                
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <div class="mt-1 flex flex-col space-y-2">
                        <input type="hidden" name="content" id="hidden-content">
                        <div id="editor" contenteditable="true" 
                            class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 min-h-[150px] p-2 overflow-y-auto"
                            required></div>
                        
                        <!-- Formatting Menu -->
                        <div class="flex space-x-2 bg-gray-100 p-2 rounded">
                            <button type="button" onclick="formatDoc('bold')" class="px-3 py-1 bg-white rounded hover:bg-gray-50 format-btn" data-format="bold">
                                <strong class="text-gray-500">B</strong>
                            </button>
                            <button type="button" onclick="formatDoc('italic')" class="px-3 py-1 bg-white rounded hover:bg-gray-50 format-btn" data-format="italic">
                                <i class="text-gray-500">I</i>
                            </button>
                            <button type="button" onclick="formatDoc('underline')" class="px-3 py-1 bg-white rounded hover:bg-gray-50 format-btn" data-format="underline">
                                <u class="text-gray-500">U</u>
                            </button>
                            <button type="button" onclick="formatDoc('insertOrderedList')" class="px-3 py-1 bg-white rounded hover:bg-gray-50 format-btn" data-format="orderedList">
                                <span class="text-gray-500">1.</span>
                            </button>
                            <button type="button" onclick="formatDoc('insertUnorderedList')" class="px-3 py-1 bg-white rounded hover:bg-gray-50 format-btn" data-format="unorderedList">
                                <span class="text-gray-500">•</span>
                            </button>
                        </div>
                        
                        <div id="preview" class="prose max-w-none p-4 bg-gray-50 rounded-md hidden"></div>
                        <button type="button" onclick="togglePreview()" class="self-start text-sm text-indigo-600 hover:text-indigo-500">
                            Toggle Preview
                        </button>
                    </div>
                </div>

                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Submit News
                </button>
            </form>
        </div>
    @else
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
            <div class="flex">
                <div class="ml-3">
                    <p class="text-sm text-yellow-700">
                        Please <a href="{{ route('view_login') }}" class="font-medium underline text-yellow-700 hover:text-yellow-600">login</a> to contribute news.
                    </p>
                </div>
            </div>
        </div>
    @endauth

    <!-- Add News -->
    <div class="space-y-8">
        @foreach($news as $item)
            <article class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $item->title }}</h2>
                <div class="text-sm text-gray-500 mb-4">
                    Posted by {{ $item->user->username }} on {{ $item->created_at->format('F j, Y') }}
                </div>
                <div class="prose max-w-none overflow-hidden overflow-wrap break-word word-break break-words" id="content-{{ $item->id }}">
                    {!! $item->content !!}
                </div>
                @if (auth()->id() === $item->user_id)
                    <div class="flex space-x-4 mt-4">
                        <button type="button" 
                            onclick="openEditModal('{{ $item->id }}', '{{ $item->title }}', `{!! $item->content !!}`)" 
                            class="text-sm text-blue-600 hover:text-blue-500">
                            Edit
                        </button>
                        <button type="button" 
                            onclick="openDeleteModal('{{ $item->id }}')" 
                            class="text-sm text-red-600 hover:text-red-500">
                            Delete
                        </button>
                    </div>
                @endif
            </article>
        @endforeach
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50 flex items-center justify-center" aria-modal="true">
    <div class="relative border w-full max-w-3xl shadow-lg rounded-lg bg-white transform">
        <div class="flex flex-col space-y-6 p-8">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-gray-900">Edit News</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Rest of your edit form remains the same -->
            <form id="editForm" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="editTitle" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="editTitle" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <span id="titleError" class="text-red-500 text-sm"></span>
                </div>

                <div>
                    <label for="editContent" class="block text-sm font-medium text-gray-700">Content</label>
                    <div class="mt-1">
                        <div id="editEditor" contenteditable="true" 
                            class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 min-h-[150px] p-2"></div>
                        <input type="hidden" id="editHiddenContent" name="content">
                    </div>
                    <span id="contentError" class="text-red-500 text-sm"></span>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50 flex items-center justify-center" aria-modal="true">
    <div class="relative border w-full max-w-md shadow-lg rounded-lg bg-white transform">
        <div class="flex flex-col space-y-4 p-6">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Delete News</h3>
                <button onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-2">
                <p class="text-sm text-gray-500">
                    Are you sure you want to delete this news article? This action cannot be undone.
                </p>
            </div>
            <div class="flex justify-end space-x-3 mt-4">
                <button type="button" onclick="closeDeleteModal()" 
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors">
                    Cancel
                </button>
                <form id="deleteForm" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let previewMode = false;
    const editor = document.getElementById('editor');
    const hiddenInput = document.getElementById('hidden-content');
    const formatButtons = document.querySelectorAll('.format-btn');

    let consecutiveEnters = 0;

    function openDeleteModal(id) {
        const modal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        
        deleteForm.action = `/news/${id}`;
        
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    function openEditModal(id, title, content) {
        const modal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
        const editTitle = document.getElementById('editTitle');
        const editEditor = document.getElementById('editEditor');
        const editHiddenContent = document.getElementById('editHiddenContent');

        editForm.action = `/news/${id}`;
        
        editTitle.value = title;
        editEditor.innerHTML = content;
        editHiddenContent.value = content;

        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('editModal');
        const titleError = document.getElementById('titleError');
        const contentError = document.getElementById('contentError');

        modal.classList.add('hidden');

        titleError.textContent = '';
        contentError.textContent = '';
    }

    document.getElementById('editForm').addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const editEditor = document.getElementById('editEditor');
        const editHiddenContent = document.getElementById('editHiddenContent');
        editHiddenContent.value = editEditor.innerHTML;

        try {
            const formData = new FormData(this);
            const response = await fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            });

            if (response.ok) {
                window.location.reload();
            } else {
                const data = await response.json();
                if (data.errors) {
                    document.getElementById('titleError').textContent = data.errors.title?.[0] || '';
                    document.getElementById('contentError').textContent = data.errors.content?.[0] || '';
                }
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });

    document.getElementById('editModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('[id^="content-"]').forEach(element => {
            element.innerHTML = element.textContent.trim();
        });

        const form = editor.closest('form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
 
            const content = editor.innerHTML.trim();
            
            if (!content) {
                alert('Please enter some content');
                return;
            }
            
            hiddenInput.value = content;
            
            this.submit();
        });

        document.addEventListener('selectionchange', updateToolbar);
    });

    function formatDoc(command) {
        if (command === 'insertOrderedList' || command === 'insertUnorderedList') {
            const selection = window.getSelection();
            const range = selection.getRangeAt(0);
            
            let currentBlock = range.startContainer;
            while (currentBlock && currentBlock.nodeType !== 1) {
                currentBlock = currentBlock.parentNode;
            }
            
            const inList = currentBlock && (currentBlock.tagName === 'LI' || currentBlock.closest('li'));
            
            if (inList) {
                const listItem = currentBlock.tagName === 'LI' ? currentBlock : currentBlock.closest('li');
                const list = listItem.parentElement;
                
                const newParagraph = document.createElement('p');
                newParagraph.innerHTML = listItem.innerHTML;
                
                if (list.children.length === 1) {

                    list.parentNode.replaceChild(newParagraph, list);
                } else {
                    list.parentNode.insertBefore(newParagraph, list.nextSibling);
                    listItem.remove();
                }
                
                const newRange = document.createRange();

                newRange.selectNodeContents(newParagraph);
                newRange.collapse(false);
                selection.removeAllRanges();
                selection.addRange(newRange);
            } else {

                if (!isAtStartOfBlock(range)) {
                    document.execCommand('insertParagraph', false, null);
                }
                document.execCommand(command, false, null);
            }
        } else {
            document.execCommand(command, false, null);
        }
        
        editor.focus();
        updateToolbar();
    }

    function isAtStartOfBlock(range) {
        const startContainer = range.startContainer;
        if (startContainer.nodeType === 3) { // Text node
            return range.startOffset === 0 && (!startContainer.previousSibling);
        }
        return range.startOffset === 0;
    }

    function updateToolbar() {
        formatButtons.forEach(button => {
            const format = button.dataset.format;
            const isActive = queryFormat(format);
            
            if (isActive) {
                button.classList.add('bg-gray-200');
                button.querySelector('*').classList.remove('text-gray-500');
                button.querySelector('*').classList.add('text-gray-900');
            } else {
                button.classList.remove('bg-gray-200');
                button.querySelector('*').classList.remove('text-gray-900');
                button.querySelector('*').classList.add('text-gray-500');
            }
        });
    }

    function queryFormat(format) {
        switch(format) {
            case 'bold':
                return document.queryCommandState('bold');
            case 'italic':
                return document.queryCommandState('italic');
            case 'underline':
                return document.queryCommandState('underline');
            case 'orderedList':
                return document.queryCommandState('insertOrderedList');
            case 'unorderedList':
                return document.queryCommandState('insertUnorderedList');
            default:
                return false;
        }
    }

    editor.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            const selection = window.getSelection();
            const range = selection.getRangeAt(0);
            const currentNode = range.startContainer;
            const listItem = currentNode.closest('li');
            
            if (listItem) {
                if (listItem.textContent.trim() === '') {

                    consecutiveEnters++;
                    
                    if (consecutiveEnters === 2) {

                        e.preventDefault();
                        consecutiveEnters = 0;
                        
                        const list = listItem.parentElement;

                        listItem.remove();
                        
                        if (list.children.length === 0) {
                            list.remove();
                        }
                        
                        document.execCommand('insertParagraph', false, null);
                        updateToolbar();
                    }
                } else {
                    consecutiveEnters = 0;
                }
            } else {
                consecutiveEnters = 0;
            }
        } else if (e.key === 'Backspace') {
            const selection = window.getSelection();
            const range = selection.getRangeAt(0);
            const currentNode = range.startContainer;
            const listItem = currentNode.closest('li');
            
            if (listItem) {

                if (isAtStartOfBlock(range)) {
                    e.preventDefault();
                    
                    const list = listItem.parentElement;
                    const newParagraph = document.createElement('p');
                    newParagraph.innerHTML = listItem.innerHTML;
                    
                    if (list.children.length === 1) {

                        list.parentNode.replaceChild(newParagraph, list);
                    } else {

                        const nextSibling = listItem.nextElementSibling;
                        listItem.remove();
                        
                        if (nextSibling) {
                            list.insertBefore(newParagraph, nextSibling);
                        } else {
                            list.appendChild(newParagraph);
                        }
                    }
                    
                    const newRange = document.createRange();
                    newRange.selectNodeContents(newParagraph);
                    newRange.collapse(false);
                    selection.removeAllRanges();
                    selection.addRange(newRange);
                    
                    updateToolbar();
                }
            }
        } else {
            consecutiveEnters = 0;
        }
    });

    function togglePreview() {
        const preview = document.getElementById('preview');
        previewMode = !previewMode;
        
        if (previewMode) {
            preview.innerHTML = editor.innerHTML;
            preview.classList.remove('hidden');
        } else {
            preview.classList.add('hidden');
        }
    }

    editor.addEventListener('input', function() {
        if (previewMode) {
            document.getElementById('preview').innerHTML = editor.innerHTML;
        }
        updateToolbar();
    });

    editor.addEventListener('focus', updateToolbar);
    editor.addEventListener('input', updateToolbar);

    editor.addEventListener('click', function() {
        editor.focus();
    });
</script>

<style>
    #editor:empty:before {
        content: 'Enter your content here...';
        color: #9CA3AF;
    }
    
    #editor {
        min-height: 150px;
    }

    #editor ul {
        list-style-type: disc;
        padding-left: 2em;
    }

    #editor ol {
        list-style-type: decimal;
        padding-left: 2em;
    }

    ol {
        list-style-type: decimal;
        margin-left: 1.5rem;
        padding-left: 1.5rem;
    }

    ul {
        list-style-type: disc;
        margin-left: 1.5rem;
        padding-left: 1.5rem;
    }

    .format-btn {
        border: 1px solid #ccc;
        cursor: pointer;
    }

    .format-btn:active {
        background-color: #eee;
    }

    .modal-open {
        overflow: hidden;
    }

    #editEditor:empty:before {
        content: 'Enter your content here...';
        color: #9CA3AF;
    }

    #editEditor {
        min-height: 150px;
    }

    #editEditor ul {
        list-style-type: disc;
        padding-left: 2em;
    }

    #editEditor ol {
        list-style-type: decimal;
        padding-left: 2em;
    }
</style>
@endpush
@endsection

</html>