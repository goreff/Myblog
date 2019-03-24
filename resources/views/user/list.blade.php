<p>Все пользователи</p>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td> Email </td>
        <td> Имя </td>
        <td> Дата добавления </td>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->created_at }}</td>
            <td width="60px">
                <a href="/user/edit/{{ $user->id }}">
                    <button title="Редактировать" class="btn btn-sm"><span class="glyphicon glyphicon-pencil"></span></button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>