<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
</head>
<body>

    <h2>Login Sistem Perpustakaan</h2>

    @if (session('success'))
        <p role="status" style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('logout'))
        <p role="status" style="color: red;">{{ session('logout') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('login.submit') }}" method="POST" autocomplete="off" novalidate>
        @csrf

        <table border="0" cellpadding="6" cellspacing="0">
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Masukkan Email" 
                        value="{{ old('email') }}" 
                        required
                    >
                    @error('email')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan Password" 
                        required
                    >
                    @error('password')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
        </table>

        <p>
            <button type="submit">Login</button>
        </p>
    </form>

</body>
</html>