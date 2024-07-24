<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Form</title>
  <style>
    body {
      font-family:cursive;
      background: linear-gradient(45deg,white,white);
    
    }

    label {
      display: block;
      margin-bottom: 8px;
    }
    #report h2{
      color:black;
    }
    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: blue;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    h2{
      color: blue;
      margin-left: 30%;
      font-weight: bold;
    }
    #report{
        margin-top: 1%;
        max-width: 600px;
       margin-left: 25%;
       box-shadow: 10px 10px 10px gray;
    }

  </style>
</head>
<body>
<div class="card">
  <form  method="post" id="report">
    <h2>Report Form</h2>

    <label for="title">Scholorship Id</label>
    <input type="text" id="title" name="id" required>

    <label for="description">Problem</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="category">To</label>
    <select id="category" name="email" required>
      <option value="foscholorship@rguktong.ac.in">foscholorship@rguktong.ac.in</option>
      <option value="so@rguktong.ac.in">so@rguktong.ac.in</option>
      <option value="Meeravali@rguktong.ac.in">Meeravali@rguktong.ac.in</option>
    </select>

    <button type="submit">Submit Report</button>
  </form>
</div>
<script>
     $(document).ready(function() {
            $("#report").submit(function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "scholorship_10.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });

</script>
</body>
</html>
