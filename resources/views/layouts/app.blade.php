<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photoshow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css" integrity="sha512-dMUQinc1gbNb95AFtKtP4q/g56T8r9oDxlWy0hrHyzfUbMq/vQztAqaR/FDY/bY0R1Ikc30aq94jyQH2Ix++ug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include('inc.topbar');
</br>
    <div class="row">
    @include('inc.messages');
        @yield('content');
    
    </div>
</body>
</html>