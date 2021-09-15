<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab1_Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/templates/../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/templates/../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="./assets/templates/../favicon/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/templates/../favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/templates/../favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/templates/../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="manifest" href="./assets/templates/../favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(32deg, #234523, #e0df3a, #f43458, #d0f89e) fixed;
            position: relative;
            color: #111;
            cursor: wait;
            font-size: 16pt;
            min-width: 690px;
        }

        a, button, input, label {
            cursor: cell;
        }

        label {
            user-select: none;
        }

        label:not([for]) {
            border: solid 1px rgba(255, 79, 163, 0.3);
            background: rgba(255, 79, 163, 0.2);
            white-space: nowrap;
            padding: 0 2px;
        }

        label + label {
            margin-inline-start: 0.5ch;
        }

        button, input:not([type="checkbox"]) {
            box-sizing: border-box;
            width: 100%;
        }

        .header, .header h1, .header h2, .header h3, .header h4, .header h5, .header h6 {
            font-family: serif;
            font-weight: bold;
            color: #111;
        }

        .header {
            font-size: 14pt;
        }

        .horizontal-rainbow {
            background: linear-gradient(to right, #F00, #FFA500, #FF0, #0F0, #0FF, #00F, #F0F);
        }

        .black-bg {
            background: #111;
            color: #fff;
        }

        .area {
            pointer-events: none;
            user-select: none;
        }

        .fancy-box {
            display: inline-block;
            border: solid 2px hotpink;
            padding: 10px;
            margin: 0 auto;

            margin-inline-start: 0.25ch;
            margin-inline-end: 0.25ch;
        }

        .form-error-container:not(.shown-form-error-container) {
            display: none;
        }

        .bad-content {
            padding: 1px;
            border: solid 1px #999;
            background: #111;
            color: #fff;
        }

        [data-oaoaoa~="align-justify"] {
            text-align: justify;
        }

        [data-oaoaoa~="align-right"] {
            text-align: right;
        }

        [data-oaoaoa~="ib"] {
            display: inline-block;
        }

        [data-oaoaoa~="drop"] {
            transform: rotate(-155deg);
            transform-origin: 80% 75%;
        }

        [data-oaoaoa~="skew"] {
            transform: skew(-20deg);
        }

        [data-oaoaoa~="bg-text"] {
            -webkit-background-clip: text;
            color: transparent;
        }

        [data-oaoaoa~="small-text"] {
            font-size: 0.7em;
        }

        a[data-oaoaoa~="invisible"] {
            text-decoration: inherit;
            color: inherit;
        }

        #background {
            background-color: rgba(255, 255, 255, 0.74);
            position: fixed;
            top: 0;
            left: 20%;
            right: 20%;
            bottom: 0;
            z-index: -1;
        }

        #background::before, #background::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: -1;
        }

        #background::before {
            background-image: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.74));
            left: -8%;
            right: 100%;
        }

        #background::after {
            background-image: linear-gradient(to left, transparent, rgba(255, 255, 255, 0.74));
            left: 100%;
            right: -8%;
        }

        #body {
            height: 100%;
            position: relative;
            z-index: 1;
        }

        #main {
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }

        #form-error-container {
            border: solid 2px darkred;
        }

        #jepa {
            transform-origin: 100% 100%;
            transition: 0.1s;
            position: fixed;
            right: 0;
            bottom: 0;
            padding: 15px;
            z-index: 1000;
        }

        #jepa > img {
            transition: inherit;
            transform-origin: 50% 50%;
            position: relative;
            opacity: 1;
        }

        #jepa:hover {
            transform: scaleX(12) scaleY(6);
        }

        #jepa:hover > img {
            transform: rotate(1080deg) scaleY(2);
        }

        #rocket {
            display: none;
        }

        @media(max-width: 920px) {
            #background {
                left: 10%;
                right: 10%;
            }

            #main {
                width: 80%;
            }
        }
    </style>
</head>
<body>
<div id="body">
    <div id="background"></div>

    <table id="main">
        <tr class="header">
            <td>
                <h1>
                    <a href="./assets/templates/../../index.php" data-oaoaoa="invisible">Лабораторная работа №I</a><br />
                    <span class="black-bg" data-oaoaoa="ib skew" style="font-family: Impact, serif;">по <span class="horizontal-rainbow" data-oaoaoa="bg-text">Веб-программированию</span></span><br />
                    <span style="opacity: 0.1; margin-right: 273px;">Программированию Интернет Приложений</span>
                </h1>
            </td>
        </tr>

        <tr class="header">
            <td>
                <h2>
                    Вариант
                    <span data-oaoaoa="ib" style="transform: scaleX(-1);">№</span><!--
                 --><span data-oaoaoa="ib" style="transform: rotate(-4deg);">211</span><!--
                 --><span data-oaoaoa="ib" style="transform: rotate(4deg);">008</span>
                </h2>
            </td>
        </tr>

        <tr class="header">
            <td style="position: relative;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNAgMAAABm0hz6AAAACVBMVEVHcEwzmf8AAACWlj8AAAAAAXRSTlMAQObYZgAAAj1JREFUaN7t2kFuqzAQBuARkiWXU6C3esopOAILD3pmz+adwuoqF3Cl7rqJlHDKBgoUCK6YXxWilb1KFH8aZhiC40AUHAk5Eg8EaXqmfdCJ/iDorxydnd4JacoAlDgkEkX0I1CDXIQuOzA6gTkdvBA6NmxEEUUUUURHXEfok5Mil2n3JkeZdB0LoXYdkUl/o/wj51wiM+qOMun9nTskS0m1KKVGVHK+I5Jm1CHhYAApBDGAFIIYQApBDCCFIAaQQhADSCGIAaQQxABSCGIAKQSxBKXXIVB145fbHN0/fL5Op417D0MgW/JrNUc6oXM6nTZDqkMll0uU9F9m3bRMzxBvQjqb5tSVrrqVbJc5Jf29tJs2oPSs+0DVq7VcLyLpYY9Gt9PGrZc27sc5sqVlvzw83d+m5ofXvuMBlfyAElpD5PpmsHypmgWit7QZpk2qN22G+rEjsg1dt7n3GEBqOxo38PQ41a4gPXvVnqe0kY6h1Z9WItlA9LEjVlKaTP0cxTQnCaKIDo/yiPZGdGhkjo2KX4jyYyPaC5ndULEJNd7+91Lka+svoYqHUT2ueh6Kh6HV/Yg2p5p9qHir44lv3vuShYh97W2weF+gWo4qbi6hiocQl+ELI4y+6PFtyCCoQFCOINoLGQQVCMoRRHshg6AcQQQgg6ACQQQgg6ACQTmCCEAFgghABYIIQAZBOYAkgUaUA0hkWtR4SbnHO6EhAJEcyR8mOBHwgISmqwMQ8KwDjDSA4r93EUX0Tei7xzu+3oB8m03FfgAAAABJRU5ErkJggg==" alt="Area" class="area" />

                <h3 style="margin-right: -46px; transform: rotate(1deg); position: absolute; right: 0;" data-oaoaoa="ib align-right">
                    Доморацкого&nbsp;&nbsp;<br />
                    Эридана <span data-oaoaoa="ib drop">А</span>лексеевича&nbsp;<br />
                    Группа: P3<span style="font-size: 22pt; line-height: 32pt; vertical-align: middle;">2</span>11
                </h3>
            </td>
        </tr>

        <tr><td><form action="./assets/templates/comp/../../../index.php" method="get" id="form" class="fancy-box">
    <table>
        <tr class="form-error-container">
            <td id="form-error-container" colspan="2"></td>
        </tr>
        <tr>
            <td>X: </td>
            <td>
                                    <label><input type="checkbox" name="x[]" value="-2" />-2 </label>
                                    <label><input type="checkbox" name="x[]" value="-1.5" />-1.5 </label>
                                    <label><input type="checkbox" name="x[]" value="-1" />-1 </label>
                                    <label><input type="checkbox" name="x[]" value="-0.5" />-0.5 </label>
                                    <label><input type="checkbox" name="x[]" value="0" />0 </label>
                                    <label><input type="checkbox" name="x[]" value="0.5" />0.5 </label>
                                    <label><input type="checkbox" name="x[]" value="1" />1 </label>
                                    <label><input type="checkbox" name="x[]" value="1.5" />1.5 </label>
                                    <label><input type="checkbox" name="x[]" value="2" />2 </label>
                <!--
         --></td>
        </tr>
        <tr>
            <td><label for="y-input">Y: </label></td>
            <td><input type="text" name="y" id="y-input" /></td>
        </tr>
        <tr>
            <td><label for="r-input">R: </label></td>
            <td><input type="text" name="r" id="r-input" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Поїхали!"></td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    "use strict";

    function displayFormError(error, element) {
        document.querySelectorAll(".form-error-container").forEach(node => node.classList.add("shown-form-error-container"));
        document.getElementById("form-error-container").innerText = error;

        if (element !== undefined) {
            element.classList.add("bad-content");
        }
    }

    function hideFormError(element) {
        document.querySelectorAll(".form-error-container").forEach(node => node.classList.remove("shown-form-error-container"));

        if (element !== undefined) {
            element.classList.remove("bad-content");
        }
    }

    const xCheckboxes = document.querySelectorAll("#form input[type=checkbox][name='x[]']");

    function validateX(submit) {
        if (Array.prototype.slice.call(xCheckboxes).filter((cb) => cb.checked).length > 0) {
            return true;
        }

        if (submit) {
            displayFormError("No one X value checked!");
        } else {
            hideFormError();
        }

        return false;
    }

    xCheckboxes.forEach((node) => node.onclick = () => validateX(false));

    function validateField(value, submit, fieldElement, fieldName, min, max) {
        if (value.trim() === "") {
            if (submit) {
                displayFormError(fieldName + " cannot be empty!", fieldElement);
            } else {
                hideFormError(fieldElement);
            }

            return false;
        }

        const floatValue = parseFloat(value);

        if (floatValue.toString() !== value || isNaN(floatValue)) {
            displayFormError(fieldName + " is not a number!", fieldElement);
            return false;
        }

        if (floatValue < min || floatValue > max) {
            displayFormError(fieldName + " must be in [" + min + ", " + max + "]!", fieldElement);
            return false;
        }

        hideFormError(fieldElement);
        return true;
    }

    const yInput = document.getElementById("y-input");
    const rInput = document.getElementById("r-input");

    const validateY = (value, submit) => validateField(value, submit, yInput, "Y", -3, 5);
    const validateR = (value, submit) => validateField(value, submit, rInput, "R", 1, 4);

    yInput.oninput = () => validateY(yInput.value, false);
    rInput.oninput = () => validateR(rInput.value, false);

    document.getElementById("form").onsubmit = () =>
        validateX(true) && validateY(yInput.value, true) && validateR(rInput.value, true);
</script>
</td></tr>

        <tr>
            <td>
                <div class="fancy-box" data-oaoaoa="small-text">
                    <table>
                        <tr>
                            <td>Current time:</td>
                            <td data-oaoaoa="align-justify" id="current-time">
                                2021-09-01 19:29:21                                UTC                            </td>
                        </tr>
                        <tr>
                            <td>Elapsed time:</td>
                            <td data-oaoaoa="align-justify">0.001128196716309 sec.</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr><td><br />&nbsp;&nbsp;&nbsp;<a href="http://ifmo.ru/" target="_blank"><img src="data:image/png;base64,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" alt="IT's More Than a University!" style="display: inline-block; transform: rotate(2deg);" /></a></td></tr>
    </table>

    <div id="jepa">
        <!--suppress CheckImageSize -->
        <img src="./assets/templates/../images/1-12676-512.png"
             style="display: inline-block; background: url('data:image/png;base64,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');"
             width="128" height="128" alt="" />
    </div>

    <div id="rocket"></div>
</div>

    <script type="text/javascript">
        "use strict";

        const currentTimeCell = document.getElementById("current-time");
        const currentTimeInterval = setInterval(function() {
            const date = new Date();

            const offset = -date.getTimezoneOffset() / 60;
            currentTimeCell.innerText = date.getFullYear() + '-' + complete(date.getMonth() + 1) + '-' + complete(date.getDate()) + ' ' +
                complete(date.getHours()) + ':' + complete(date.getMinutes()) + ':' + complete(date.getSeconds()) + ' ' +
                'UTC' + (offset > 0 ? '+' : '') + (offset !== 0 ? offset : '');
        }, 500);

        function complete(src, length = 2, char = '0') {
            src = src + '';

            while (src.length < length) {
                src = char + src;
            }

            return src;
        }
    </script>
</body>
</html>
