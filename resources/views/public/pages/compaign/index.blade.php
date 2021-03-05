@extends('public.layouts.public')

@section('title')
Compaign
@endsection

@section('styles')

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/wizard.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
<!-- END: Custom CSS-->

@endsection

@section('content')
<!-- Form wizard with step validation section start -->
<section id="validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Start Compaign</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle">
                            <!-- start compaign-->
                            <h6><i class="step-icon feather icon-home"></i>Compaign</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                <b>Who are you raising money for?</b>
                                                    <br>
                                                Please choose the type of account that will be receiving your funds.
                                            </label>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <input type="radio" name="radiocolor" checked value="false">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Individual</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-success">
                                                            <input type="radio" name="radiocolor" value="false">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Bussiness or NonProfit</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                                <b> Where are you located?</b><br>
                                                If you are raising funds as an individual, what is your country of legal residence? If you are raising funds for a business, where is the business headquartered? Learn more about country limitations.
                                            </label>
                                            <fieldset class="form-group">
                                                <select class="form-control required" id="basicSelect">
                                                    <option>Resident country</option>
                                                    <option>USA</option>
                                                    <option>UK</option>
                                                    <option>China</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                               <b> Where is your bank?</b> <br>
                                                Your bank account location determines the currency in which you can raise funds.
                                            </label>
                                            <select class="custom-select form-control required" id="location" name="location">
                                                <option value="">Bank list</option>
                                                <option value="Amsterdam">Chicago</option>
                                                <option value="Berlin">San Francisco</option>
                                                <option value="Frankfurt">Boston</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 1 -->
                            <h6><i class="step-icon feather icon-home"></i>Basic</h6>
                            <fieldset>
                                <h2>Basics</h2>
                                Make a good first impression: introduce your campaign objectives and entice people to learn more. This basic information will represent your campaign on your campaign page, on your campaign card, and in searches.
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                <b>Campaign Title *</b><br>
                                                What is the title of your campaign?
                                            </label>
                                            <input type="text" class="form-control required" id="firstName3" placeholder="My Campaign Title"
                                                name="firstName">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                               <b> Campaign Tagline *</b>
                                               <br>
                                                Provide a short description that best describes your campaign to your audience.
                                            </label>
                                            <textarea name="tag_line" id="tag_line" class="form-control required" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                               <b> Campaign Card Image *</b><br>
                                                Upload a square image that represents your campaign. <br>
                                                640 x 640 recommended resolution, 220 x 220 minimum resolution.
                                            </label>
                                            <input type="file" class="form-control required" id="emailAddress5"
                                                name="emailAddress">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">
                                               <b> Location*</b> <br>
                                                Choose the location where you are running the campaign. This location will be visible on your campaign page for your audience to see.
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location">
                                                <option value="">New York</option>
                                                <option value="Amsterdam">Chicago</option>
                                                <option value="Berlin">San Francisco</option>
                                                <option value="Frankfurt">Boston</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                               <b>Category *</b><br>
                                               To help backers find your campaign, select a category that best represents your project.
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location">
                                                <option value="">category</option>
                                                <option value="Amsterdam">Chicago</option>
                                                <option value="Berlin">San Francisco</option>
                                                <option value="Frankfurt">Boston</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">
                                               <b>Tags *</b> <br>
                                               Enter up to five keywords that best describe your campaign. These tags will help with organization and discoverability.
                                            </label>
                                            <select class="select2 form-control" multiple="multiple">
                                                <option value="square">Square</option>
                                                <option value="rectangle" selected>Rectangle</option>
                                                <option value="rombo">Rombo</option>
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze">Trapeze</option>
                                                <option value="traible" selected>Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                               <b>Campaign Duration*
                                                </b><br>
                                                How many days will you be running your campaign for? You can run a campaign for any number of days, with a 60 day duration maximum.
                                            </label>
                                            <input type="number" class="form-control required" id="emailAddress5"
                                                name="emailAddress">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon feather icon-briefcase"></i>Content</h6>
                            <fieldset>
                                <h1>Pitch Video or Image</h1><br>
                                Add a video or image to appear on the top of your campaign page. Campaigns with videos raise 2000% more than campaigns without videos. Keep your video 2-3 minutes. Learn how to make a great video.
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle3">
                                               <b> Video URL *</b><br>
                                                Enter a YouTube or Vimeo URL to appear at the top of your campaign page. Make sure your video has closed captioning enabled on Youtube or Vimeo.
                                            </label>
                                            <input type="text" class="form-control required" id="proposalTitle3"
                                                name="proposalTitle" placeholder="http://">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle5">
                                                <b>Video Overlay Image (Optional)</b><br>
                                                Choose an image to represent your video before it plays. <br>
                                                695 x 460 recommended resolution.
                                            </label>
                                            <input type="file" class="form-control" id="jobTitle5"
                                                name="jobTitle">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shortDescription3">
                                                <b>Story *</b><br>
                                                Tell potential contributors more about your campaign. Provide details that will motivate people to contribute. A good pitch is compelling, informative, and easy to digest. Learn more. <br>
                                                Images that are intended to span the width of the story section should have a minimum width of 695 pixels. Images wider than 695 pixels will be resized proportionally.
                                            </label>
                                            <textarea name="editor1" id="shortDescription3" rows="4"
                                                class="form-control">Short Summary
                                                Contributors fund ideas they can be passionate about and to people they trust. Here are some things to do in this section:

                                                Introduce yourself and your background.
                                                Briefly describe your campaign and why it's important to you.
                                                Express the magnitude of what contributors will help you achieve.
                                                Remember, keep it concise, yet personal. Ask yourself: if someone stopped reading here would they be ready to make a contribution?

                                                What We Need & What You Get
                                                Break it down for folks in more detail:

                                                Explain how much funding you need and where it's going. Be transparent and specific-people need to trust you to want to fund you.
                                                Tell people about your unique perks. Get them excited!
                                                Describe where the funds go if you don't reach your entire goal.
                                                The Impact
                                                Feel free to explain more about your campaign and let people know the difference their contribution will make:

                                                Explain why your project is valuable to the contributor and to the world.
                                                Point out your successful track record with projects like this (if you have one).
                                                Make it real for people and build trust.
                                                Risks & Challenges
                                                People value your transparency. Be open and stand out by providing insight into the risks and obstacles you may face on the way to achieving your goal.

                                                Share what qualifies you to overcome these hurdles.
                                                Describe your plan for solving these challenges.
                                                Other Ways You Can Help
                                                Some people just can't contribute, but that doesn't mean they can't help:

                                                Ask folks to get the word out and make some noise about your campaign.
                                                Remind them to use the Indiegogo share tools!
                                                And that's all there is to it.</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                <b>FAQ *</b> <br>
                                                The FAQ section should provide the most common details that backers are looking for when evaluating your campaign. We will also provide common answers to questions about crowdfunding and how Indiegogo works.
                                            </label>

                                            <br>
                                            <br>
                                            <label for="">
                                                <b>Question</b>
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3"
                                                name="eventName">
                                            <br>
                                            <br>
                                            <label for="">
                                                <b>Answer</b>
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3"
                                                name="eventName">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon feather icon-image"></i>PERKS</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-6 m-auto text-center">
                                        <h1>You haven't created any perks yet</h1>
                                        Perks are incentives offered to backers in exchange for their support. You may edit your perk details until the perk is claimed. Visit the Help Center to learn about different kinds of perks you can offer.
                                        <svg data-v-200afb8e="" aria-labelledby="svgIcon-title-a5264ddd-3825-4175-87c3-7705c362ec20" alt="No Perks" role="img" class="svgIcon createEdit-perkTableEmptyState-perkCards" style="width: 602px; height: 273px;"><title id="svgIcon-title-a5264ddd-3825-4175-87c3-7705c362ec20">
                                            No Perks
                                          </title> <!----> <use xlink:href="#v-perks_empty"></use></svg>

                                          <h2>Let's get started</h2>
                                          <p>Create your perks here.</p>
                                          <svg data-v-200afb8e="" aria-labelledby="svgIcon-title-fb097607-461a-4317-bf43-e8a347c06827" alt="Arrow" role="img" class="svgIcon createEdit-perkTableEmptyState-arrow" style="width: 15px; height: 37px;"><title id="svgIcon-title-fb097607-461a-4317-bf43-e8a347c06827">
                                            Arrow
                                          </title> <!----> <use xlink:href="#v-arrow"></use></svg>

                                          <button class="btn btn-success">CREATE NEW PERK</button>
                                    </div>
                                </div>
                            </fieldset>
                            <h6><i class="step-icon feather icon-image"></i>ITEMS</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-6 m-auto text-center">
                                        <h2>See all your items and manage them here.</h2>
                                        <p>Items are what you offer to backers when they claim perks.</p>
                                        <svg data-v-200afb8e="" aria-labelledby="svgIcon-title-a5264ddd-3825-4175-87c3-7705c362ec20" alt="No Perks" role="img" class="svgIcon createEdit-perkTableEmptyState-perkCards" style="width: 602px; height: 273px;"><title id="svgIcon-title-a5264ddd-3825-4175-87c3-7705c362ec20">
                                            No Perks
                                          </title> <!----> <use xlink:href="#v-perks_empty"></use></svg>

                                        <h4>You don't have any items yet.</h4>
                                        <p> Go to the perks page to create a perk first and then include items.</p>
                                        <svg data-v-200afb8e="" aria-labelledby="svgIcon-title-fb097607-461a-4317-bf43-e8a347c06827" alt="Arrow" role="img" class="svgIcon createEdit-perkTableEmptyState-arrow" style="width: 15px; height: 37px;"><title id="svgIcon-title-fb097607-461a-4317-bf43-e8a347c06827">
                                            Arrow
                                        </title> <!----> <use xlink:href="#v-arrow"></use></svg>

                                        <button class="btn btn-primary">GO TO PERKS Page</button>
                                    </div>
                                </div>
                            </fieldset>
                            <h6><i class="step-icon feather icon-image"></i>Team</h6>
                            <fieldset>
                                <h2>Primary Contact</h2>
                                <p>Please provide this person's information so we can get in touch if there are any issues with the campaign. This information will not be displayed publicly.</p>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                <b>Legal First Name *</b>
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3"
                                                name="eventName">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">
                                                <b>Legal Last Name *</b>
                                            </label>
                                            <input type="text" class="form-control required" id="legal_last_name"
                                                name="eventName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventLocation3">
                                                <b>Date of Birth *</b>
                                            </label>
                                            <input type="date" class="form-control required" id="dob"
                                                name="dob ">
                                        </div>
                                        <div class="form-group d-flex align-items-center pt-md-2">
                                            <label class="mr-2">Phone Number *</label>
                                            <input type="number" class="form-control required" id="Phone"
                                                name="Phone ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                <b>Country *</b>
                                            </label>
                                            <input type="text" class="form-control required" id="Country"
                                                name="Country">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">
                                                <b>Street Address *</b>
                                            </label>
                                            <input type="text" class="form-control required" id="Street"
                                                name="Street">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h2>Support Email Address</h2>
                                        If you don't want to use the Campaign Owner's Indiegogo Account email address to answer questions from backers, please include another that will be used by you or a team member to address backer specific concerns. Learn more about providing great customer service to your backers.
                                        <br><br>
                                        <label for="">
                                            <b>Support Email</b>
                                            <input type="text" class="form-control required" id="Support"
                                                name="Support">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <h6><i class="step-icon feather icon-image"></i>FundING</h6>
                            <fieldset>
                                <h2>Funding Type</h2>
                                Indiegogo offers two funding types: Flexible Funding (keep what you raise) and Fixed Funding (all-or-nothing). Learn about the differences and the pricing for each. <br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                <b>Campaign Goal Amount & Currency*</b><br>
                                                How much money would you like to raise for this campaign? A minimum goal of 500 in your currency is required. For help on choosing a goal amount, see this article. Make sure you keep in mind our fees and your reserved funds.
                                            </label>
                                            <input type="number" class="form-control required" id="Amount" placeholder="$$"
                                                name="Amount">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h2>Bank Information</h2>
                                        Fill out your bank account information. We’ll only be able to send you funds if you’ve raised more than 100 in your currency after fees. Learn more about payouts.
                                        <div class="form-group">
                                            <label for="lastName3">
                                               <b>IBAN*</b>
                                               <br>
                                               Enter the number for the account into which you want us to deposit your funds.
                                            </label>
                                            <input type="text" class="form-control required" id="IBAN"
                                                name="IBAN">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName3">
                                               <b>Retype account number.</b>
                                               <br>
                                            </label>
                                            <input type="text" class="form-control required" id="Retype"
                                                name="Retype">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h2>Customer Billing Statement *</h2>
                                    This description will appear on your customer’s card statements. Use a unique name that is related to your project title, project purpose, or business. Avoid using only common terms or geographic locations, or else it may result in unsuccessful payments. The name can only contain letters, numbers, and spaces.
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                               <b>INDIEGOGO*</b>
                                               <br>
                                            </label>
                                            <input type="text" class="form-control required" id="INDIEGOGO"
                                                name="INDIEGOGO">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h6><i class="step-icon feather icon-image"></i>Extra</h6>
                            <fieldset>
                                <h2>Draft Campaign Share Link</h2>
                                Generate a link to the current draft of your campaign. Share this link to get feedback from friends on how your campaign is shaping up before your campaign goes live. <br><br>
                                <div class="row">
                                    <div class="col-md-6 m-auto">
                                        <div class="form-group">
                                            <input type="number" class="form-control required" disabled id="Amount" placeholder="$$"
                                                name="Amount">

                                            <a href="" class="btn btn-primary">GENERATE LINK</a>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                            <h6><i class="step-icon feather icon-image"></i>SETTING</h6>
                            <fieldset>
                                <h2>Settings</h2>
                                We provide additional features for you that can help bolster your campaign. Configure the optional campaign settings below. <br><br>
                                <br>
                                <br>
                                <h1>InDemand</h1>

                                <p>InDemand makes it easy for any successful campaigner to keep raising funds after their campaign ends. With InDemand, you can accept contributions after your campaign ends, grow your community and reach new audiences, and get ongoing exposure on the Indiegogo platform. Learn more</p>
                                <label>
                                    <input type="checkbox" value="" checked>
                                     Opt in to InDemand
                                </label>
                                    <hr>

                                    <h2>Allow Tips for Indiegogo on Checkout Page</h2>
                                    <p>We provide our backer community the option to add a tip for Indiegogo at checkout, so we can match a portion of tips and donate to various causes important to the Indiegogo community. You can control whether this feature is visible on your campaign’s checkout page. Learn more.</p>

                                    <div class="vs-radio-con">
                                        <input type="radio" name="radiocolor" checked value="false">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="">
                                            Yes, allow Tips for Indiegogo on my campaign’s checkout page
                                          </span>
                                    </div>
                                    <div class="vs-radio-con">
                                        <input type="radio" name="radiocolor" checked value="false">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="">
                                            No, do not allow Tips for Indiegogo on my campaign’s checkout page
                                          </span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with step validation section end -->

@endsection
@section('scripts')




<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.steps.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js') }}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page JS-->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endsection
