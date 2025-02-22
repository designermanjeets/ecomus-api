<!DOCTYPE html>
<html>
<head>
    <h1>sabpaisa</h1>
</head>
<body>
    
    <form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="post">
        @csrf
        <input type="hidden" name="encData" value="{{ $data }}" id="frm1">
        <input type="hidden" name="clientCode" value="{{ $clientCode }}" id="frm2">
        <input type="submit" id="submitButton" name="submit">
    </form>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
    
$('#submitButton').click();
 
});
</script>
</html>