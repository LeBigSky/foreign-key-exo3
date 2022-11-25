<section>
    <a href="{{ route('user.create') }}" class="btn btn-outline-warning">Create User</a>
    <table class="table">
        <h2>USERS BLADE</h2>
        <thead>
          <tr>
            <th scope="col">Nickname</th>
            <th scope="col">Mail</th>
            <th scope="col">ID</th>
            <th scope="col">age</th>
            <th scope="col">phone</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $users as $user )
            <tr>
            <td>{{ $user->nickname }}</td>
            <td>{{ $user->email }}</td>
            <td> {{ $user->profil_id }}</td>
            <td class="border">{{ $user->profil->age }}</td>
            <td>{{ $user->profil->phone }}</td>
           </tr>

        @endforeach
          
        </tbody>
      </table>
</section>