<x-app-layout>
    <x-slot name="header">
        <title class="text-black dark:text-black">Ajouter un chat</title>
        <h1 class="text-black dark:text-black">Ajouter un chat</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200 dark:blue-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <h1 class="text-center">Information du nouveau chat</h1>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('cats.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="breed">Race</label>
                            <input type="text" id="breed" name="breed" required class="form-control rounded-lg">
                        </div>
                        <div class="form-group">
                            <label for="name">Prénom</label>
                            <input type="text" id="name" name="name" required class="form-control rounded-lg">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" required class="form-control rounded-lg">
                        </div>
                        <div class="form-group">
                            <label for="gender">Sexe</label>
                            <select id="gender" name="gender" required class="form-control rounded-lg">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="issues_with_kids" name="issues_with_kids" value="1" class="form-check-input">
                            <label for="issues_with_kids" class="form-check-label">Match pas les enfants</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="issues_with_other_cats" name="issues_with_other_cats" value="1" class="form-check-input">
                            <label for="issues_with_other_cats" class="form-check-label">Match pas avec ses congénères</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="issues_with_dogs" name="issues_with_dogs" value="1" class="form-check-input">
                            <label for="issues_with_dogs" class="form-check-label">Match pas avec les chiens</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="no_issues" name="no_issues" value="1" checked class="form-check-input">
                            <label for="no_issues" class="form-check-label">Match avec tout le monde</label>
                        </div>
                        <div class="form-group">
                            <label for="image">Portrait</label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Ajouter le chat</button>
                        </div>
                    </form>
                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .disabled input {
        cursor: not-allowed;
    }
    .disabled .form-check-label {
        color: gray;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const issuesCheckboxes = document.querySelectorAll('#issues_with_kids, #issues_with_other_cats, #issues_with_dogs');
        const noIssuesCheckbox = document.getElementById('no_issues');

        issuesCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    noIssuesCheckbox.disabled = true;
                    noIssuesCheckbox.parentNode.classList.add('disabled');
                } else {
                    let anyChecked = false;
                    issuesCheckboxes.forEach(cb => {
                        if (cb.checked) {
                            anyChecked = true;
                        }
                    });
                    noIssuesCheckbox.disabled = anyChecked;
                    noIssuesCheckbox.parentNode.classList.toggle('disabled', anyChecked);
                }
            });
        });

        noIssuesCheckbox.addEventListener('change', function() {
            if (this.checked) {
                issuesCheckboxes.forEach(cb => {
                    cb.disabled = true;
                    cb.parentNode.classList.add('disabled');
                });
            } else {
                issuesCheckboxes.forEach(cb => {
                    cb.disabled = false;
                    cb.parentNode.classList.remove('disabled');
                });
            }
        });

        // Initial check on page load
        if (noIssuesCheckbox.checked) {
            issuesCheckboxes.forEach(cb => {
                cb.disabled = true;
                cb.parentNode.classList.add('disabled');
            });
        } else {
            let anyChecked = false;
            issuesCheckboxes.forEach(cb => {
                if (cb.checked) {
                    anyChecked = true;
                }
            });
            noIssuesCheckbox.disabled = anyChecked;
            noIssuesCheckbox.parentNode.classList.toggle('disabled', anyChecked);
        }
    });
</script>
