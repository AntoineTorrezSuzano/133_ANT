<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <form>
        <input type="text" name="Username" placeholder="Username">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <p>What's your opinions of my website ?</p>
        <select name="opinion">
            <option value="Ugly">Ugly</option>
            <option value="Meh">Meh</option>
            <option value="Neutral">Neutral</option>
            <option value="Good">Good</option>
            <option value="Beautiful">Beautiful</option>
        </select>
        <br>
        <textarea></textarea>
        <br>

        <table>
            <tr>
                <td><label>Man</label></td>
                <td><input type="radio" name="Gender" value="Man"><br></td>
            </tr>
            <tr>
                <td><label>Woman</label></td>
                <td><input type="radio" name="Gender" value="Woman"><br></td>
            </tr>
        </table>
        <br>
        <label>Agree to receive newsletter</label><br>
        <input type="checkbox">


    </form>
</body>
</html>