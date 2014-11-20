<div class="well-small"> 
    <?
        if ($invalid) { ?>
            <b><?=$invalid?> - TRY AGAIN.</b>
       <? } ?>
        <form action="/itdata/login/" method="post">
            <legend>Login Below:</legend>
            <label>Email:</label>
            <input type="email" name="user_login" /><br />
            <?php echo form_error('user_login'); ?>
            <label>Password:</label>
            <input type="password" name="user_pwd" /><br />
            <?php echo form_error('user_pwd'); ?>
            <br />
        <input type="submit" value="Login" />
        </form>
</div>