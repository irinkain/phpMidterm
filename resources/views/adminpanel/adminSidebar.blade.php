
<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Admin Panel </div>
    <div class="list-group list-group-flush">
        <a href="{{route('topics.create')}}" class="list-group-item list-group-item-action bg-light">Create new quiz</a>
        <a href="{{route('results.index')}}" class="list-group-item list-group-item-action bg-light">All Results</a>
        <a href="{{route('topics.index')}}" class="list-group-item list-group-item-action bg-light">Topics</a>
        <a href="{{route('questions.index')}}" class="list-group-item list-group-item-action bg-light">Questions</a>
        <a href="{{route('questionsOptions.index')}}" class="list-group-item list-group-item-action bg-light">Questions Options</a>
        <a href="{{route('users.index')}}" class="list-group-item list-group-item-action bg-light">User management</a>
    </div>
</div>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

