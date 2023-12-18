<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css"/>
    <title>Registration</title>
</head>
<body>
    <div class="testbox">
        <form action="/">
            <h1>Booking Form</h1>
            <div class="item">
                <p>Customer's Name</p>
                <div class="name-item">
                    <input type="text" name="name" placeholder="First"/>
                    <input type="text" name="name" placeholder="Last"/>
                </div>
            </div>
            <div class="item">
                <p>Address</p>
                <input type="text" name="name" placeholder="Street address"/>
                <input type="text" name="name" placeholder="Street address line 2"/>
                <div class="city-item">
                    <input type="text" name="name" placeholder="City"/>
                    <input type="text" name="name" placeholder="Region"/>
                    <input type="number" name="name" placeholder="Postal / Zip code"/>
                    <select>
                        <option value="">Country</option>
                        <option value="1">Bangladesh</option>
                        <option value="2">Japan</option>
                        <option value="3">Dubai</option>
                        <option value="4">Noakhali</option>
                        <option value="5">USA</option>
                    </select>
                </div>
            </div>
            <div class="item">
                <p>Email</p>
                <input type="email" name="name"/>
            </div>
            <div class="item">
                <p>Telephone number where you can be reached</p>
                <input type="number" name="name"/>
            </div>
            <div class="item">
                <p>Order Date</p>
                <input type="date" name="name" required/>
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
                <p>Incident Time</p>
                <input type="time" name="name" required/>
                <i class="fas fa-clock"></i>
            </div>
            <div class="item">
                <p>What best describes the type of problem encountered</p>
                <select>
                    <option value="">Please select</option>
                    <option value="1">Dispensing Error</option>
                    <option value="2">Illegal Dispensing</option>
                    <option value="3">Fraud</option>
                    <option value="4">Impairment/Diversion</option>
                    <option value="5">Unethical Conduct</option>
                    <option value="6">Regards Prescriber</option>
                    <option value="6">Other</option>
                </select>
            </div>
            <div class="item">
                <p>What happened? Be as specific as possible, including dates, names, etc.</p>
                <textarea rows="5"></textarea>
            </div>
            <div class="btn-block">
                <button type="submit" href="/">Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>