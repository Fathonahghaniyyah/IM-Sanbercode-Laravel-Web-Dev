<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10</title>
</head>
<body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <label>First Name</label><br><br>
            <input type="text" name="fname"><br><br>
            <label>Last Name</label><br><br>
            <input type="text" name="lname"><br><br>
            <label>Gender</label><br><br>
            <input type="radio" name="gender" value="male"/> Male <br/>
            <input type="radio" name="gender" value="female"/> Female <br/>
            <input type="radio" name="gender" value="other"/> Other <br/><br>
            <label>Nationality</label><br><br>
            <select name="nationality">
                <option value="1">Indonesian</option>
                <option value="1">Malaysian</option>
                <option value="1">Other</option>
            </select>
            <br><br>
    
            <label>Language Spoken :</label><br><br>
            <input type="checkbox" name="gender" value="male"/> Bahasa Indonesia <br/>
            <input type="checkbox" name="gender" value="female"/> English <br/>
            <input type="checkbox" name="gender" value="other"/> Other <br/><br>
    
            <label>Bio</label><br><br>
            <textarea name="bio" rows="5" cols="20"></textarea>
            <br><br>
            <input type="submit" value="Sign Up">
        </form>
    
    </body>
    </html>
    <br>
    <button type="button" class="btn btn-light" onclick="window.location.href='/'">Kembali</button>


</body>
</html>