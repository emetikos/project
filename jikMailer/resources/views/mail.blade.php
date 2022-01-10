<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobSeeker - Mail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>

        body {
            background-color: #F0F0F0;
        }

        a:link {
            text-decoration: none;
        }

        .header {
            background-color: #554595;
            color: white;
            font-size: 28px;
            font-weight: bold;
            height: 6rem;
        }

        .span-header {
            font-size:48px;
            margin-left: 1.5rem;
        }

        .job-title { color: black; font-weight: bold; font-size: 22px; text-decoration: underline; }
        .job-location { color: black; font-weight: bold; font-size: 20px; }
        .job-salary { color: black; font-size: 20px; }
        .job-vacancies { color:black; opacity: 70%; }

        .footer {
            font-size: 18px;
            background-color: #554595;
            color: white;
        }

        .footer-content {
            padding: 1rem;
        }

        .job {
            padding-left: 5%;
            padding-right: 5%;
        }
        .context {
            padding-left: 5%;
            padding-right: 5%;
            width: auto;
        }
        .context:hover {
            background-color: white;
            box-shadow:  0 4px 8px 0 rgba(97, 69, 153, 0.2), 0 6px 20px 0 rgba(97, 69, 153, 0.19);
            border-radius: .5rem;
        }

        .industry {
            font-size: 28px;
            color: #554595;
            margin-bottom: 14px;
            margin-left: 14px;
            margin-right: 14px;
            border-radius: .3rem;
            border: 1px solid #554595;
            box-shadow:  0 4px 8px 0 rgba(97, 69, 153, 0.2), 0 6px 20px 0 rgba(97, 69, 153, 0.19);
        }

        .industry:hover { background-color: #554595; color: white; }

        .industry:active { background-color: white; color: #554595; }

        .greeting { padding:.5rem;}



    </style>

</head>
<body>
<div class="container">
    <!-- HEADER-->
    <div class="header">
        <div class="border header"><span class="span-header">jobsinkent.com</span> Kent's largest jobsite</div>
    </div>

    <!-- MAIN BODY-->
    <div class="body col">
        <div class="space" style="height: .4rem"></div>
        <div class="">
            <div class="greeting text-center"><h2>Dear "jobseeker",  let this year make your dreams true and let us show the best jobs in the market for you!</h2></div>
        </div>
        <br> <br>
        <!-- MOST VIEWED JOBS -->
        <div class="row text-center mb-4">
            <div class="col col-3"><hr></div>
            <div class="col col-6"><h4>Check the most viewed jobs and the most popular industries</h4></div>
            <div class="col col-3"><hr></div>
        </div>
        <div class="row">
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=warehouse+operatives">
                    <div class="context">
                        <div class="job-title">Warehouse Operative</div>
                        <div class="job-location">Kent</div>
                        <div class="job-salary">£8.91 - £15 based on location</div>
                        <div class="job-vacancies">vacancies: 170+</div>
                    </div>
                </a>
            </div>
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=Forklift+Driver">
                    <div class="context">
                        <div class="job-title">Forklift Driver</div>
                        <div class="job-location">Kent</div>
                        <div class="job-salary">£10.50 - £11.66 based on location</div>
                        <div class="job-vacancies">vacancies: 40+</div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=Planning+coordinators">
                    <div class="context">
                        <div class="job-title">Planning coordinators </div>
                        <div class="job-location">Maidstone, Kent</div>
                        <div class="job-salary">Doe</div>
                        <div class="job-vacancies">vacancies: 1</div>
                    </div>
                </a>
            </div>
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=Commercial+Account+Handler">
                    <div class="context">
                        <div class="job-title">Commercial Account Handler </div>
                        <div class="job-location">Kent</div>
                        <div class="job-salary">£20000 - £400000</div>
                        <div class="job-vacancies">vacancies: 10+</div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=Business+Development+Executive">
                    <div class="context">
                        <div class="job-title">Business Development Executive </div>
                        <div class="job-location">Ramsgate, Kent</div>
                        <div class="job-salary">£20000 - £300000</div>
                        <div class="job-vacancies">vacancies: 4</div>
                    </div>
                </a>
            </div>
            <div class="job col">
                <a href="https://www.jobsinkent.com/search?q=Finance+Administrator">
                    <div class="context">
                        <div class="job-title">Finance Administrator</div>
                        <div class="job-location">Maidstone,Kent</div>
                        <div class="job-salary">Up to £10ph</div>
                        <div class="job-vacancies">vacancies: 10+</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END OF MOST VIEWED JOBS -->
        <br><br>
        <!-- START OF MOST POPULAR INDUSTRIES -->
        <div class="row text-center mb-4">
            <div class="col col-3"><hr></div>
            <div class="col col-6"><h4>Our most popular Industries holds the best opportunities  for you !</h4></div>
            <div class="col col-3"><hr></div>
        </div>

        <div class="row text-center">
            <div class="col"><a href="https://www.jobsinkent.com/search?i=25"><div class="industry">Administration</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=1"><div class="industry">Accountancy</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=38"><div class="industry">Media & Design</div></a></div>
        </div>
        <div class="row text-center">
            <div class="col"><a href="https://www.jobsinkent.com/search?i=9"><div class="industry">Education</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=21"><div class="industry">Management</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=29"><div class="industry">Retail</div></a></div>
        </div>
        <div class="row text-center">
            <div class="col"><a href="https://www.jobsinkent.com/search?i=50"><div class="industry">Cleaning</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=39"><div class="industry">Landscaping</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=33"><div class="industry">Part-Time</div></a></div>
        </div>
        <div class="row text-center">
            <div class="col"><a href="https://www.jobsinkent.com/search?i=2"><div class="industry">Agriculture</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=40"><div class="industry">Hospitality</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=16"><div class="industry">Manufacturing</div></a></div>
        </div>
        <div class="row text-center">
            <div class="col"><a href="https://www.jobsinkent.com/search?i=22"><div class="industry">Marketing</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=13"><div class="industry">Graduate</div></a></div>
            <div class="col"><a href="https://www.jobsinkent.com/search?i=17"><div class="industry">Insurance</div></a></div>
        </div>
        <!-- END OF MOST POPULAR INDUSTRIES -->
    </div>
    <div class="spa" style="height: .4rem"></div>


    <!-- FOOTER -->
    <div class="footer col ">

        <div class="border text-center footer-content">
            <p>This email was sent to "jobseeker@mail"  from JIK Software Ltd, trading as <a href="https://www.jobsinkent.com/" style="color: white; font-weight: bold;  text-decoration: underline;">jobsinkent.com</a> . </p>
            <p>
                Whilst reasonable precaution has been taken to minimise risks, we cannot accept liability for any damage which you sustain as a result of software viruses. You should therefore carry out your own virus checks before opening any attachment.
            </p>
            <p><a href="https://www.jobsinkent.com/jobseekers/profile" style="color: white; text-decoration: underline; font-weight: bold;">Click here</a> to manage your email preferences. </p>
            <p>© 2018 JIK Software Ltd </p>

        </div>


    </div>
</div>
</body>
</html>
