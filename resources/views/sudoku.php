<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Sudoku</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/scripts/main.js"></script>
  <script>
     var params = <?php echo json_encode($params); ?>;
     console.log(params);
  </script>
</head>
<body>
<div id="root">
  <div>
    <table>
      <tbody>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="0"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="1"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="2"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="3"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="4"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="5"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="6"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="7"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="8"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="9"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="10"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="11"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="12"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="13"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="14"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="15"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="16"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="17"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="18"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="19"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="20"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="21"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="22"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="23"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="24"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="25"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="26"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="27"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="28"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="29"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="30"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="31"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="32"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="33"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="34"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="35"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="36"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="37"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="38"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="39"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="40"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="41"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="42"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="43"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="44"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="45"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="46"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="47"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="48"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="49"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="50"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="51"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="52"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="53"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="54"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="55"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="56"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="57"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="58"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="59"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="60"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="61"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="62"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="63"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="64"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="65"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="66"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="67"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="68"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="69"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="70"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="71"></td>
      </tr>
      <tr>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="72"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="73"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="74"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="75"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="76"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="77"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="78"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="79"></td>
        <td><input type="number" min="1" max="9" maxlength="1" formnovalidate="formnovalidate" data-index="80"></td>
      </tr>
      </tbody>
    </table>
  </div>
  <div id="controls">
      <button id="reset">Reset</button>
      <button id="cheat">Show solution</button>
  </div>
  <div id="success">
      <p>You did it!</p>
  </div>
</div>
</body>
</html>

