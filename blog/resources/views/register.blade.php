<html>
    <head>

    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        <form action="/welcome" method="POST">
        @csrf
        <p>First Name :</p>
                <input type="text" name="namadepan">
        <p>Last Name :</p>
                <input type="text" name="namabelakang">
        <p>Gender :</p>
            <input type="radio" name="gender" value="M"> Male 
            <input type="radio" name="gender" value="F"> Female
            <input type="radio" name="gender" value="O"> Other
        <p>Nationality:</p>
            <select>
                <option>Indonesian</option>
                <option>Singaporean</option>
                <option>Malaysian</option>
                <option>Australian</option>
            </select>
        <p>Language Spoken:</p>
            <input type="checkbox"> Bahasa Indonesia
            <br>
            <input type="checkbox"> English
            <br>
            <input type="checkbox"> Other
        <p>Bio :</p>
        <textarea cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up" class="btn">
        </form>
    </body>
</html>