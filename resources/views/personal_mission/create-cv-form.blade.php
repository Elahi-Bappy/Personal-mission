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
    <title>CV Form</title>
</head>
<body>
        <div class="testbox">
            <form method="POST" action="{{route('cvInformationFormSubmit')}}">
                @csrf
                <h1>CV Information Form</h1>
                <div class="item">
                    <p>Personal Information</p>
                    <div class="name-item">
                        <input type="text" name="name" placeholder="Full name"/>
                    </div>
                    <div class="item">
                        <p>Date of birth</p>
                        <div class="item">
                            <input type="date" name="date_of_birth" required/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <p>About Me</p>
                    <textarea name="about_me" rows="5"></textarea>
                </div>
                <div class="item">
                    <p>Address</p>
                    <input type="text" name="street_address" placeholder="Street address"/>
                    <div class="city-item">
                        <input type="text" name="city" placeholder="City"/>
                        <input type="text" name="region" placeholder="Region"/>
                        <input type="number" name="zip_code" placeholder="Postal / Zip code"/>
                        <input type="text" name="country" placeholder="Country"/>
                    </div>
                </div>
                <div class="item">
                    <p>Contact</p>
                    <input type="email" name="email" placeholder="type your email"/>
                    <input type="text" name="social_link" placeholder="social link"/>
                    <div class="city-item">
                        <input type="number" name="mobile_number" placeholder="Mobile number where you can be reached"/>
                        <input type="text" name="emergency_contact" placeholder="Emergency Contact"/>
                    </div>
                </div>
                <div class="item">
                    <p>Education</p>
                    <div class="city-item">
                        <input type="text" name="level_of_education" placeholder="Level of Education"/>
                        <input type="text" name="major_group" placeholder="Concentration/ Major/Group"/>
                        <input type="text" name="result_division_class" placeholder="Result Division/Class"/>
                        <input type="number" name="marks" placeholder="Marks(%)"/>
                        <input type="number" name="years_of_passing" placeholder="Year of Passing "/>
                    </div>
                    <input type="text" name="institute_name" placeholder="Institute Name"/>
                </div>
                <div class="item">
                    <p>Experience</p>
                    <input type="text" name="company_name" placeholder="Company Name"/>
                    <div class="city-item">
                        <input type="text" name="company_business" placeholder="Company Business"/>
                        <input type="text" name="designation" placeholder="Designation"/>
                        <input type="text" name="department" placeholder="Department"/>
                        <input type="text" name="responsibility" placeholder="Responsibilities"/>
                        <input type="text" name="company_location" placeholder="Company Location"/>
                    </div>
                    <div class="item">
                        <p>Employment Period:</p>
                        <div class="item">
                            <input type="date" name="employment_period" required/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <p>Highlights</p>
                    <div class="item">
                        <textarea name="highlights" placeholder="start with 1." rows="5"></textarea>
                    </div>
                </div>
                <div class="btn-block">
                    <button type="submit" href="/">Submit</button>
                </div>
            </form>
        </div>
</body>
</html>