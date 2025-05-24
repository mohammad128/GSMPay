<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://127.0.0.1:8080";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">

            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>

    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-register">
                                <a href="#auth-POSTapi-auth-register">Register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-login">
                                <a href="#auth-POSTapi-auth-login">Login</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-post" class="tocify-header">
                <li class="tocify-item level-1" data-unique="post">
                    <a href="#post">Post</a>
                </li>
                                    <ul id="tocify-subheader-post" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="post-GETapi-post">
                                <a href="#post-GETapi-post">Index</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-GETapi-post-top-users">
                                <a href="#post-GETapi-post-top-users">Top Users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-GETapi-post--id-">
                                <a href="#post-GETapi-post--id-">Show</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user">
                    <a href="#user">User</a>
                </li>
                                    <ul id="tocify-subheader-user" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-POSTapi-user-avatar">
                                <a href="#user-POSTapi-user-avatar">Change Avatar</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 24, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8080</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="auth">Auth</h1>



                                <h2 id="auth-POSTapi-auth-register">Register</h2>

<p>
</p>

<p>register new user.</p>

<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8080/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mobile\": \"09363680395\",
    \"password\": \"password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mobile": "09363680395",
    "password": "password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 13,
        &quot;mobile&quot;: &quot;09363680396&quot;,
        &quot;avatar&quot;: null
    },
    &quot;server_time&quot;: &quot;2025-05-24T08:54:26.376997Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-auth-register"
               value="09363680395"
               data-component="body">
    <br>
<p>The user mobile Example: <code>09363680395</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-register"
               value="password"
               data-component="body">
    <br>
<p>The user password Example: <code>password</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-auth-login">Login</h2>

<p>
</p>

<p>login user.</p>

<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8080/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mobile\": \"09363680395\",
    \"password\": \"password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mobile": "09363680395",
    "password": "password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 13,
        &quot;mobile&quot;: &quot;09363680396&quot;,
        &quot;avatar&quot;: null
    },
    &quot;server_time&quot;: &quot;2025-05-24T08:54:26.376997Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-auth-login"
               value="09363680395"
               data-component="body">
    <br>
<p>The user mobile Example: <code>09363680395</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="password"
               data-component="body">
    <br>
<p>The user password Example: <code>password</code></p>
        </div>
        </form>

                <h1 id="post">Post</h1>



                                <h2 id="post-GETapi-post">Index</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>list of posts.</p>

<span id="example-requests-GETapi-post">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8080/api/post" \
    --header "Authorization: Bearer xxx" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/post"
);

const headers = {
    "Authorization": "Bearer xxx",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 28,
            &quot;title&quot;: &quot;داکر یک سکوی نرم افزاری است&quot;,
            &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
            &quot;views&quot;: 90,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;mobile&quot;: &quot;09882367591&quot;,
                &quot;avatar&quot;: &quot;avatars/aed9ca05-1abf-46a8-a6cc-ebccf021f197.jpg&quot;
            },
            &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;در شبکه های اجتماعی فعالتر باشید&quot;,
            &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
            &quot;views&quot;: 61,
            &quot;user&quot;: {
                &quot;id&quot;: 4,
                &quot;mobile&quot;: &quot;09737159037&quot;,
                &quot;avatar&quot;: &quot;avatars/b525ef74-e6cd-4bfc-938d-cc93ba92ba87.jpg&quot;
            },
            &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 34,
            &quot;title&quot;: &quot;تحقیق در عملیات ۱ یکی از دروس اصلی رشته&zwnj;های مهندسی صنایع&quot;,
            &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
            &quot;views&quot;: 63,
            &quot;user&quot;: {
                &quot;id&quot;: 6,
                &quot;mobile&quot;: &quot;09452696734&quot;,
                &quot;avatar&quot;: &quot;avatars/81e55b40-7653-459b-8f69-d0d75c326492.jpg&quot;
            },
            &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 33,
            &quot;title&quot;: &quot;واژه گرافیک ریشه&zwnj;ای یونانی دارد&quot;,
            &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
            &quot;views&quot;: 57,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;mobile&quot;: &quot;09882367591&quot;,
                &quot;avatar&quot;: &quot;avatars/aed9ca05-1abf-46a8-a6cc-ebccf021f197.jpg&quot;
            },
            &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 32,
            &quot;title&quot;: &quot;داکر یک سکوی نرم افزاری است&quot;,
            &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
            &quot;views&quot;: 80,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;mobile&quot;: &quot;09882367591&quot;,
                &quot;avatar&quot;: &quot;avatars/aed9ca05-1abf-46a8-a6cc-ebccf021f197.jpg&quot;
            },
            &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8080/api/post?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8080/api/post?page=15&quot;,
        &quot;prev&quot;: &quot;http://127.0.0.1:8080/api/post?page=9&quot;,
        &quot;next&quot;: &quot;http://127.0.0.1:8080/api/post?page=11&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 10,
        &quot;from&quot;: 46,
        &quot;last_page&quot;: 15,
        &quot;links&quot;: [
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=9&quot;,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=11&quot;,
                &quot;label&quot;: &quot;11&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=12&quot;,
                &quot;label&quot;: &quot;12&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=13&quot;,
                &quot;label&quot;: &quot;13&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=14&quot;,
                &quot;label&quot;: &quot;14&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=15&quot;,
                &quot;label&quot;: &quot;15&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post?page=11&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8080/api/post&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 50,
        &quot;total&quot;: 71
    },
    &quot;server_time&quot;: &quot;2025-05-24T09:02:43.775030Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-post" data-method="GET"
      data-path="api/post"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post"
                    onclick="tryItOut('GETapi-post');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post"
                    onclick="cancelTryOut('GETapi-post');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-post"
               value="Bearer xxx"
               data-component="header">
    <br>
<p>Example: <code>Bearer xxx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-post"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-post"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="post-GETapi-post-top-users">Top Users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>get top users ordered by the highest total views of all their posts</p>

<span id="example-requests-GETapi-post-top-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8080/api/post/top-users" \
    --header "Authorization: Bearer xxx" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/post/top-users"
);

const headers = {
    "Authorization": "Bearer xxx",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-top-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;mobile&quot;: &quot;09452696734&quot;,
            &quot;avatar&quot;: &quot;avatars/81e55b40-7653-459b-8f69-d0d75c326492.jpg&quot;,
            &quot;total_view&quot;: 540
        },
        {
            &quot;id&quot;: 8,
            &quot;mobile&quot;: &quot;09696809592&quot;,
            &quot;avatar&quot;: &quot;avatars/240d41f6-1e2e-4910-977b-134c3e1587c8.jpg&quot;,
            &quot;total_view&quot;: 520
        },
        {
            &quot;id&quot;: 7,
            &quot;mobile&quot;: &quot;09429271871&quot;,
            &quot;avatar&quot;: &quot;avatars/65c830ed-0698-4b01-9db0-e2a28edb4ac6.jpg&quot;,
            &quot;total_view&quot;: 503
        },
        {
            &quot;id&quot;: 4,
            &quot;mobile&quot;: &quot;09737159037&quot;,
            &quot;avatar&quot;: &quot;avatars/b525ef74-e6cd-4bfc-938d-cc93ba92ba87.jpg&quot;,
            &quot;total_view&quot;: 437
        },
        {
            &quot;id&quot;: 1,
            &quot;mobile&quot;: &quot;09551370179&quot;,
            &quot;avatar&quot;: &quot;avatars/891e1da7-a3ef-4584-b517-76609f27669a.jpg&quot;,
            &quot;total_view&quot;: 402
        },
        {
            &quot;id&quot;: 10,
            &quot;mobile&quot;: &quot;09793504041&quot;,
            &quot;avatar&quot;: &quot;avatars/bcc180f2-8bb3-4e92-9c1b-30a840024c33.jpg&quot;,
            &quot;total_view&quot;: 336
        },
        {
            &quot;id&quot;: 2,
            &quot;mobile&quot;: &quot;09156908495&quot;,
            &quot;avatar&quot;: &quot;avatars/8ca6cc3f-8243-4404-9b74-c58a7bebe6fd.jpg&quot;,
            &quot;total_view&quot;: 326
        },
        {
            &quot;id&quot;: 5,
            &quot;mobile&quot;: &quot;09882367591&quot;,
            &quot;avatar&quot;: &quot;avatars/aed9ca05-1abf-46a8-a6cc-ebccf021f197.jpg&quot;,
            &quot;total_view&quot;: 326
        },
        {
            &quot;id&quot;: 3,
            &quot;mobile&quot;: &quot;09474404383&quot;,
            &quot;avatar&quot;: &quot;avatars/2c5cec36-387c-4a1e-9c61-51327f234f8e.jpg&quot;,
            &quot;total_view&quot;: 292
        },
        {
            &quot;id&quot;: 9,
            &quot;mobile&quot;: &quot;09797123615&quot;,
            &quot;avatar&quot;: &quot;avatars/21fb1ca3-5050-42f3-a3e4-bd550f80445a.jpg&quot;,
            &quot;total_view&quot;: 74
        },
        {
            &quot;id&quot;: 11,
            &quot;mobile&quot;: &quot;09363680395&quot;,
            &quot;avatar&quot;: &quot;avatar/nkBTceSiZMFZo2rU3odZMNFYeSliexYGh1Ewj0U2.jpg&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;mobile&quot;: &quot;architecto&quot;,
            &quot;avatar&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;mobile&quot;: &quot;09363680396&quot;,
            &quot;avatar&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8080/api/post/top-users?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8080/api/post/top-users?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8080/api/post/top-users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8080/api/post/top-users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 13,
        &quot;total&quot;: 13
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-top-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-top-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-top-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-top-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-top-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-post-top-users" data-method="GET"
      data-path="api/post/top-users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-top-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-top-users"
                    onclick="tryItOut('GETapi-post-top-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-top-users"
                    onclick="cancelTryOut('GETapi-post-top-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-top-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/top-users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-post-top-users"
               value="Bearer xxx"
               data-component="header">
    <br>
<p>Example: <code>Bearer xxx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-post-top-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-post-top-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="post-GETapi-post--id-">Show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>fetch specific post by id.</p>

<span id="example-requests-GETapi-post--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8080/api/post/architecto" \
    --header "Authorization: Bearer xxx" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/post/architecto"
);

const headers = {
    "Authorization": "Bearer xxx",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 38,
        &quot;title&quot;: &quot;مراقب سلامتی خود باشید!&quot;,
        &quot;content&quot;: &quot;متاورس به عنوان یک شبکه&zwnj; مجازی عمل کرده که در آن کاربران قادر خواهند بود با یکدیگر و با دیگر اجزای محیط اطراف خود تعامل کنند. به عبارتی دیگر، در دنیای متاورس افراد به صورت آنلاین و مجازی به نقش&zwnj;آفرینی می&zwnj;پردازند. این دنیای مجازی، جنبه&zwnj;های مختلف شبکه&zwnj;های اجتماعی،&zwnj; بازی&zwnj;های ویدیوئی، فناوری واقعیت مجازی (VR) و واقعیت افزوده (AR) و در نهایت بلاک&zwnj;چین را با یکدیگر ادغام می&zwnj;کند. به همین دلیل متاورس را می&zwnj;توان به دنیایی که توسط واقعیت&zwnj;های مجازی و واقعیت&zwnj;های افزوده ساخته می&zwnj;شود هم نسبت داد. با افزایش نفوذ بلاک&zwnj;چین در دنیای فناوری، پای متاورس به بازی&zwnj;های بلاک&zwnj;چینی باز شد. بازی&zwnj;هایی که افراد در آن می&zwnj;توانند آیتم&zwnj;های بازی را در قالب ارز دیجیتال خریداری و معامله کنند. البته توجه داشته باشید نوع عملکرد بازی&zwnj;های متاورس در بلاک&zwnj;چین، تفاوتی با بازی&zwnj;های غیر بلاک&zwnj;چینی ندارد و فقط دارایی&zwnj;های بازیکن در بازی به توکن تبدیل شده است. با وجود اینکه هنوز خیلی با نمونه&zwnj;های کاربردی فناوری متاورس فاصله داریم اما این مفهوم مدتهای طولانی و برای چندین دهه است که در داستان&zwnj;ها، بازی&zwnj;های رایانه&zwnj;ای و فناوری&zwnj;های دیجیتال مطرح بوده است. در حقیقت واژه متاورس و خلق آن به دهه ۹۰ میلادی زمانی که نیل استفنسون (Neal Stephenson) کتابی با نام اِسنو کرَش (Snow Crash) منتشر کرد باز می&zwnj;گردد. این نویسنده در این کتاب برای اولین بار مفاهیمی مثل متاورس و آواتار (Avatar)  را در قالب داستان پیش&zwnj;بینی کرد. مفاهیمی که سالها بعد از آن با همین نام به دنیای دیجیتال راه پیدا کردند. این ماجرا به همین جا ختم نمی&zwnj;شود. مدت&zwnj;ها بعد نویسنده کتاب بازیکن شماره یک آماده (Ready Player One) ، ارنست کلاین (Ernest Cline) به روایت زندگی انسانها در سال ۲۰۴۴ می&zwnj;پردازد. در این کتاب روایت شده انسان&zwnj;ها می&zwnj;توانند زندگی مشقت&zwnj;باری که در دنیای واقعی دارند را با زندگی در دنیای مجازی و دیجیتال ادامه دهند. نگاهی به همه این جریانات و در نهایت تغییر نام فیس&zwnj;بوک به متا همه نشان&zwnj;دهنده این است که از گذشته تاکنون برنامه&zwnj;های زیادی برای مقوله متاورس وجود داشته است.&quot;,
        &quot;views&quot;: 76,
        &quot;user&quot;: {
            &quot;id&quot;: 6,
            &quot;mobile&quot;: &quot;09452696734&quot;,
            &quot;avatar&quot;: &quot;avatars/81e55b40-7653-459b-8f69-d0d75c326492.jpg&quot;
        },
        &quot;created_at&quot;: &quot;2025-05-21T13:03:52.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-21T13:08:00.000000Z&quot;
    },
    &quot;server_time&quot;: &quot;2025-05-24T09:02:49.550284Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-post--id-" data-method="GET"
      data-path="api/post/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post--id-"
                    onclick="tryItOut('GETapi-post--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post--id-"
                    onclick="cancelTryOut('GETapi-post--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-post--id-"
               value="Bearer xxx"
               data-component="header">
    <br>
<p>Example: <code>Bearer xxx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-post--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-post--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-post--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="user">User</h1>



                                <h2 id="user-POSTapi-user-avatar">Change Avatar</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>change user avatar.</p>

<span id="example-requests-POSTapi-user-avatar">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8080/api/user/avatar" \
    --header "Authorization: Bearer xxx" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "avatar=@/tmp/phpxFsdL0" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8080/api/user/avatar"
);

const headers = {
    "Authorization": "Bearer xxx",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('avatar', document.querySelector('input[name="avatar"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-avatar">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 11,
        &quot;mobile&quot;: &quot;09363680395&quot;,
        &quot;avatar&quot;: &quot;avatar/nkBTceSiZMFZo2rU3odZMNFYeSliexYGh1Ewj0U2.jpg&quot;
    },
    &quot;server_time&quot;: &quot;2025-05-24T09:00:15.251545Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-user-avatar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-avatar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-avatar"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-user-avatar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-avatar">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-user-avatar" data-method="POST"
      data-path="api/user/avatar"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-avatar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-avatar"
                    onclick="tryItOut('POSTapi-user-avatar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-avatar"
                    onclick="cancelTryOut('POSTapi-user-avatar');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-avatar"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/avatar</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-user-avatar"
               value="Bearer xxx"
               data-component="header">
    <br>
<p>Example: <code>Bearer xxx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-user-avatar"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-user-avatar"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="avatar"                data-endpoint="POSTapi-user-avatar"
               value=""
               data-component="body">
    <br>
<p>The avatar image Example: <code>/tmp/phpxFsdL0</code></p>
        </div>
        </form>




    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
<script>
    // document.addEventListener("DOMContentLoaded", function(event) {
    //     let originalMakeAPICall = window.makeAPICall;
    //     let originalHandleResponse = window.handleResponse;
    //
    //     window.makeAPICall = function(...args)
    //     {
    //         const token = localStorage.getItem('authToken');
    //         if (token) {
    //             args[4]['Authorization'] = `Bearer ${token}`;
    //         }
    //         return originalMakeAPICall(...args);
    //     }
    //     window.handleResponse = function(...args)
    //     {
    //         let r = JSON.parse(args[1]);
    //         if(r?.data?.token) {
    //             localStorage.setItem('authToken', r?.data?.token);
    //         }
    //         return originalHandleResponse(...args);
    //     }
    // });
</script>
</html>
