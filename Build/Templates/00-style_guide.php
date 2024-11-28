<?php
//------------------------------------------------------------------------------
include 'Globals/head.php';
//------------------------------ START CONTENT ---------------------------------
?>

<div class="style-guide">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <div class="d-flex">
                <a href="/" class="navbar-brand ">
                    <img src="Img/Logo/logo_kj.png" class="d-inline-block align-text-top" alt="brand-logo" width="60" height="60">
                </a>
                <h1 class="style-guide-headline"> Style Guide</h1>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="nav" aria-labelledby="Toggle navigation">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" id="nav">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a href="" class="nav-link">Typeface</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">colors</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">buttons</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">links</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">forms</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">texts</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">lists</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">table</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">images</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-typeface card style-guide-card mb-20">
                    <h2 class="style-guide-title mb-20" id="section-typeface">Typeface</h2>
                    <div class="row ">
                        <div class="col-sm-auto d-sm-block d-flex flex-column justify-content-center">
                            <p class="mb-5" style="font-family:'Inter';font-size: 100px; line-height:100px; font-weight:600; color:#000000">
                                Aa
                            </p>

                            <div>
                                <p class="mb-5 sg-text" style="font-family:'Inter';">
                                    font-family : Inter
                                </p>
                                <div class="d-flex">
                                    <p class="mb-5 sg-text" style="font-family:'Inter';">
                                        font-weight :
                                    </p>
                                    <p class="mb-5 d-flex flex-column gap-5" style="font-family:'Inter';">
                                        <span class="font-300 sg-text">Light </span>
                                        <span class="font-400 sg-text">Regular </span>
                                        <span class="font-500 sg-text">Meduim </span>
                                        <span class="font-600 sg-text">Semi bold </span>
                                        <span class="font-700 sg-text">Bold </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="align-middle ">
                                                <h1>H1 heading</h1>
                                            </td>
                                            <td class="align-bottom sg-text">
                                                72/72/700 & 42/42
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle ">
                                                <h2 class="">H2 heading</h2>
                                            </td>
                                            <td class="align-bottom sg-text">
                                                64/64/700 & 36/36
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle ">
                                                <h3>H3 heading </h3>
                                            </td>
                                            <td class="align-bottom sg-text">
                                                36/42/500 & 28/30
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <h4>H4 heading </h4>
                                            </td>
                                            <td class="align-bottom sg-text">
                                                32/42/700 & 24/24
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <h5>H5 heading </h5>
                                            </td>
                                            <td class="align-bottom sg-text ">
                                                25/30/700 & 20/20
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle ">
                                                <h6>H6 heading </h6>
                                            </td>
                                            <td class="align-bottom sg-text ">
                                                20/30/700 & 18/18
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-texts card style-guide-card  mb-20">
                    <h2 class="style-guide-title mb-20" id="section-texts">Texts</h2>

                    <div class="d-flex flex-column gap-5 border-bottom">
                        <div class="row g-0 mb-10 border-bottom text-headline">
                            <div class="col-md-6">
                                <div class="table-title-style-guide">Class Name</div>
                            </div>
                            <div class="col-md-3">
                                <div class="table-title-style-guide"> Desktop size</div>
                            </div>
                            <div class="col-md-3">
                                <div class="table-title-style-guide"> Mobile size</div>
                            </div>
                        </div>

                        <div class="row  g-0 text-item">
                            <div class="col-md-6">
                                <div class="headline-small"> headline-small </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text"> 20/23.4/600 </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text"> 16/22/600 </div>
                            </div>
                        </div>

                        <div class="row  g-0 text-item">
                            <div class="col-md-6">
                                <div class="text"> p / text</div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text"> 16/25/400</div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text"> 16/16/400</div>
                            </div>
                        </div>
                        <div class="row  g-0 text-item">
                            <div class="col-md-6">
                                <div class="text-medium"> text-medium</div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text">17/27/400 </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sg-text"> 16/20/400</div>
                            </div>
                        </div>

                        <div class="row  g-0 text-item">
                            <div class="col-md-6">
                                <div class="text-small"> text-small</div>
                            </div>
                            <div class="col-md-3">
                                <div>14/20/400 </div>
                            </div>
                            <div class="col-md-3">
                                <div> 11/14 </div>
                            </div>
                        </div>

                    </div>
                    <h2 class="style-guide-title mb-20 mt-40" id="section-styled-texts">styled texts</h2>


                    <div class="row align-items-center">
                        <div class="col-md-6 col-12 ">
                            <div class="text-with-line">text-with-line</div>
                        </div>
                        <div class="col-md-6 col-12 ">
                            <div class="text-with-vertical-line ">
                                <div class="headline-small">
                                    headline-small
                                </div>
                                text-with-vertical-line
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6 col-12 ">
                            <div class="numbered-title numbered-title-1">Title 1</div>
                        </div>
                        <div class="col-md-6 col-12 ">
                            <div class="numbered-title numbered-title-2">Title 2</div>
                        </div>
                    </div>
                </div>
                <div class="section-buttons card style-guide-card  mb-20">
                    <div class="my-20">
                        <h2 class=" style-guide-title mb-20" id="section-buttons">Buttons </h2>
                        <div class="row align-items-center">
                            <div class="col-auto my-20">
                                <div class=" d-flex">
                                    <a href="#" class="primary-button">primary-button</a>
                                </div>
                            </div>
                            <div class="col-auto my-20">
                                <div class=" d-flex">
                                    <a href="#" class="primary-button white">primary-button white</a>
                                </div>
                            </div>

                            <div class="col-auto my-20">
                                <div class="d-flex">
                                    <a href="#" class="secondary-button">secondary-button</a>
                                </div>
                            </div>
   
                        </div>

                    </div>
                </div>
                <div class="section-forms card style-guide-card mb-20">
                    <h2 class=" style-guide-title mb-20" id="section-forms">forms</h2>
                    <form action="" class="needs-validation p-md-30 p-10" novalidate>
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="form-group">
                                    <label>Default</label>
                                    <input class="text-default form-control" placeholder="Placeholder..." type="text" required>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Dropdown</label>
                                    <select class="form-select form-control" type="select" required>
                                        <option selected value="">Bitte wählen</option>
                                        <option>option...1</option>
                                        <option>.option..2</option>
                                        <option>..option.3</option>
                                        <option>...option4</option>
                                    </select>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group checkbox-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" required>
                                        <label class="form-check-label" for="inlineCheckbox1">Checbox</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox111"
                                            value="option1" required>
                                        <label class="form-check-label" for="inlineCheckbox111">Checkbox error</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group radiobox-group">
                                    <div class="form-radio form-check-inline">
                                        <input type="radio" id="Radio1" name="RadioInline" value="one" class=" form-radio-input" required>
                                        <label class=" form-radio-label" for="Radio1">Radio button</label>
                                    </div>
                                    <div class="form-radio form-check-inline">
                                        <input type="radio" id="Radio2" name="RadioInline" value="two" class=" form-radio-input" required>
                                        <label class=" form-radio-label" for="Radio2">Radio error</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="primary-button" value="submit" type="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=" col-lg-4">
                <div class="section-colors card style-guide-card mb-20">
                    <h2 class="style-guide-title mb-20" id="section-colors">colors</h2>
                    <div class="row gx-0 gy-5">
                        <div class="col-lg-4 col-sm-2 col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #000000;"></div>
                            <div class="sg-color-name">$color-black</div>
                            <div class="sg-color-code">#000000</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #fff; border:1px solid black"></div>
                            <div class="sg-color-name">$color-white</div>
                            <div class="sg-color-code">#fff</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #FFC5C0;"></div>
                            <div class="sg-color-name">$color-brand</div>
                            <div class="sg-color-code">#FFC5C0</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #2D2D2D;"></div>
                            <div class="sg-color-name">$color-primary</div>
                            <div class="sg-color-code">#2D2D2D</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #333333;"></div>
                            <div class="sg-color-name">$color-secondary</div>
                            <div class="sg-color-code">#333333</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #4AB1C8;"></div>
                            <div class="sg-color-name">$color-action</div>
                            <div class="sg-color-code">#4AB1C8</div>
                        </div>

                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape mx-10" style="background-color: #EEEDF0;"></div>
                            <div class="sg-color-name">$color-gray</div>
                            <div class="sg-color-code">#EEEDF0</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #297a8c;"></div>
                            <div class="sg-color-name">$color-blue</div>
                            <div class="sg-color-code">#297a8c</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #F4F4F4;"></div>
                            <div class="sg-color-name">$color-bg-gray</div>
                            <div class="sg-color-code">#F4F4F4</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #FFE7E5;"></div>
                            <div class="sg-color-name">$color-bg-pink</div>
                            <div class="sg-color-code">#FFE7E5</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #D7EFF2;"></div>
                            <div class="sg-color-name">$color-bg-blue</div>
                            <div class="sg-color-code">#D7EFF2</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2 ">
                            <div class="sg-round-shape" style="background-color: #9D0202;"></div>
                            <div class="sg-color-name">$warning-red</div>
                            <div class="sg-color-code">#9D0202</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #FFA800; border:1px solid #FFA800"></div>
                            <div class="sg-color-name">$color-orange</div>
                            <div class="sg-color-code">#FFA800</div>
                        </div>
                        <div class="col-lg-4 col-sm-2  col-6 d-flex flex-column align-items-center gap-2">
                            <div class="sg-round-shape" style="background-color: #1D910A; border:1px solid #1D910A"></div>
                            <div class="sg-color-name">$color-green</div>
                            <div class="sg-color-code">#1D910A</div>
                        </div>
                    </div>
                </div>
                <div class="section-links card style-guide-card mb-20">
                    <h2 class="style-guide-title mb-20" id="section-links">links </h2>
                    <div class="row align-items-center">
                        <div class="col-auto my-20">
                            <div class="">
                                <a href="#">default-link</a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class="">
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class="">
                                <a href="#" class="colored-link">colored-link</a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div>
                                <a href="#" class="underline-link">underline-link</a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div>
                                <a href="#" class="underline-colored-link">underline-colored-link</a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class="animated-link">
                                <a href="#">animated-link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-social-media card style-guide-card  mb-20">
                    <h2 class="style-guide-title mb-20" id="section-social-media">buttons social media</h2>
                    <div class="row align-items-center">
                        <div class="col-auto my-20">
                            <div class=" d-flex">
                                <a href="" class="social-link  icon-facebook" title="facebook icon" target="_blank"></a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class=" d-flex">
                                <a href="" class="social-link  icon-linkedin" title="linkedin icon" target="_blank"></a>
                            </div>
                        </div>

                        <div class="col-auto my-20">
                            <div class="d-flex">
                                <a href="" class="social-link  icon-github" title="github icon" target="_blank"></a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class="d-flex">
                                <a href="" class="social-link  icon-figma" title="figma icon" target="_blank"></a>
                            </div>
                        </div>
                        <div class="col-auto my-20">
                            <div class="d-flex">
                                <a href="" class="social-link  icon-whatsup" title="whatsup icon" target="_blank"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="section-lists card style-guide-card mb-20">
                    <h2 class="style-guide-title mb-20" id="section-lists"> lists </h2>
                    <h3 class="style-guide-subtitle"> defaults lists </h3>
                    <div class="row mb-20">
                        <div class="col-12">
                            <ul>
                                <li>Lorem ipsum dolor sit.

                                </li>
                                <li>Lorem ipsum dolor sit.
                                </li>
                                <li>Lorem ipsum dolor sit.
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>Level 1 Lorem ipsum dolor sit.
                                    <ul>
                                        <li>
                                            Level 2 Lorem ipsum dolor sit.
                                            <ul>
                                                <li>
                                                    Level 3 Lorem ipsum dolor sit.
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="style-guide-subtitle"> ordred lists : </h3>
                    <div class="row mb-20">
                        <div class="col-12">
                            <ol>
                                <li>Lorem ipsum dolor sit.

                                </li>
                                <li>Lorem ipsum dolor sit.

                                </li>
                                <li>Lorem ipsum dolor sit.
                                </li>
                                </ul>
                        </div>
                        <div class="col-12">
                            <ol>
                                <li>Level 1 Lorem ipsum dolor sit.
                                    <ol>
                                        <li>
                                            Level 2 Lorem ipsum dolor sit.
                                        </li>
                                        <ol>
                                            <li>
                                                Level 3 Lorem ipsum dolor sit.
                                            </li>
                                        </ol>

                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section-tables card style-guide-card mb-20">
                    <h2 class="style-guide-title" id="section-tables"> tables </h2>
                    <table class="mb-40">
                        <tr>
                            <th scope="col">Player</th>
                            <th scope="col">Gloobles</th>
                            <th scope="col">Za'taak</th>
                        </tr>
                        <tr>
                            <th scope="row">TR-7</th>
                            <td>7</td>
                            <td>4,569</td>
                        </tr>
                        <tr>
                            <th scope="row">Khiresh Odo</th>
                            <td>7</td>
                            <td>7,223</td>
                        </tr>
                        <tr>
                            <th scope="row">Mia Oolong</th>
                            <td>9</td>
                            <td>6,219</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>

    </div>









</div>
<?php
//------------------------------------------------------------------------------
include 'Globals/foot.php';
//------------------------------ START CONTENT ---------------------------------
?>