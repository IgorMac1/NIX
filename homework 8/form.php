<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Delivery form</h1>
<form class="row g-3" method="post">
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationDefault01" name="firstName" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" name="lastName" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Email</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                   name="email" required>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationDefault03" class="form-label">City</label>
        <input type="text" class="form-control" id="validationDefault03" name="city"  required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault04" class="form-label">Delivery</label>
        <select class="form-select" id="validationDefault04" name="delivery" required>
            <option selected disabled value="">Choose...</option>
            <option>MeestExpress</option>
            <option>Intime</option>
            <option>NovaPoshta</option>

        </select>
    </div>
    <div class="col-md-4">
        <label for="validationDefault05" class="form-label">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" name="zip" required>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
            </label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="go">Submit form</button>
        <button class="btn btn-primary" type="reset">Reset form</button>
    </div>
</form>
<div class="info">

</div>
</body>
</html>
