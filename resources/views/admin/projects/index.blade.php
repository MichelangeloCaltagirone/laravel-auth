@extends("layouts.app")

@section("content")

<div class="container">

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Project Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Description</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->name }}</td>
                <td>{{ $project->author }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="/admin/projects/{{$project->id}}" class="btn btn-sm btn-primary mt-2">Vedi dettagli</a>
                </td>
            </tr>

            @empty
                <h1>No Projects available...</h1>
            @endforelse

          <tr>
        </tbody>
      </table>

      <div>
        {{  $projects->links() }}
      </div>

</div>

@endsection
