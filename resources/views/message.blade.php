<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <form action="{{ url('/send-message')}}" method="POST">
    @csrf
        <label for="textInput">Enter Text:</label>
        <input type="text" id="message" name="message" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
