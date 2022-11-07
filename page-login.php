<?php get_header() ?>
<section class="margin-section login-form-wrapper" id="login-form-wrapper">
    <form action="/" id="login-form" class="login-form">
        <h1 class="kironews-form-logo"><a href="<?php echo home_url(); ?>">Kiro<span class="news">news</span></a></h1>
        <div class="form-section">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" placeholder="Enter Username" name="username" required>
        </div>
        <div class="form-section">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required>
        </div>
        <label class="form-section checkbox-wrapper">
            <input type="checkbox" name="remember"> 
            <span>Remember me!</span>
        </label>
        <button type="submit" class="form-button submit-button">Login</button>
        <div class="or-section"><span>or</span></div>
        <a href="http://localhost/kironews/register"><input type="button" class="form-button register-link-button" value="Register"></a>
    </form>
</section>
<?php get_footer() ?>