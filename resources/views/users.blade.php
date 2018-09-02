<div class="title m-b-md">
    <ul>
        @foreach ($users as $user)
            <li>
                <b>Name:</b> {{ $user->name }}<br>
                <b>Last Name:</b> {{ $user->last_name }}<br>
                <b>E-Mail:</b> {{ $user->email }}
            </li>
        @endforeach
    </ul>
</div>
