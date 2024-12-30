<tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->cohort->name }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td><a href="{{ $student->linkedin }}">{{ $student->linkedin }}</a></td>
            <td>{{ $student->job_title }}</td>
            <td>{{ $student->company_name }}</td>
            <td>
                <img src="{{ asset('storage/' . $student->picture) }}" alt="Student Picture" width="100">
            </td>
            <td>
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <form action="{{ route('student.delete', $student->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
