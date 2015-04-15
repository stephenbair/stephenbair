<?php $page='contact' ?>
<?php include('../includes/meta.php') ?>
    <body id="contact" class="secondary">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container clearfix">
            <?php include('../includes/header.php') ?>
        </div>
        <div class="content clearfix">
            <div class="container">
            	<p class="spacer">If you're interested in contacting me with a question or would simply like more information, please fill out the form below.</p>
            	<form id="contact-form" method="post" action="#">
					<fieldset>
						<label for="firstName" form="contact-form">First Name</label>
						<input name="firstName" type="text" value="First Name"/>
						<label for="lastName" form="contact-form">Last Name</label>
						<input name="lastName" type="text" value="Last Name"/>
						<label for="email" form="contact-form">Email</label>
						<input name="email" type="text" value="Email"/>
						<label for="topic" form="contact-form">Topic</label>
						<select name="topic" form="contact-form">
							<option name="none" value="None">Select a Topic</option>
							<option name="chat" value="Just want to chat.">Just want to chat.</option>
							<option name="website" value="I'd like you to make me a website!">I'd like you to make me a website!</option>
							<option name="job" value="I want to give you a job.">I want to give you a job.</option>
						</select>
						<label for="message" form="contact-form">Message</label>
						<textarea name="message">Write a message...</textarea>
						<button type="submit" form="contact-form">send <i class="icon-direction"></i></button>
					</fieldset>
				</form>
				<ul class="side">
					<li>
	        			<h2>Email</h2>
	        			sbair[at]stephenbair.com
	        		</li>
	        		<li>
	        			<h2>Telephone</h2>
	        			+1 717.286.3932
	        		</li>
	        		<li>
	        			<h2>Skype</h2>
	        			<a href="skype:">bairstephen</a>
	        		</li>
	        		<li>
	        			<h2>Social</h2>
	        			<ul>
	        				<li><a href="http://www.linkedin.com/in/stephenbair/" target="_blank"><i class="icon-linkedin icon"></i>LinkedIn</a></li>
							<li><a href="https://github.com/stephenbair" target="_blank"><i class="icon-github icon"></i>GitHub</a></li>
							<li><a href="https://twitter.com/stephenbair" target="_blank"><i class="icon-twitter icon"></i>Twitter</a></li>
							<li><a href="https://plus.google.com/u/0/106540523204506990738/posts" target="_blank"><i class="icon-gplus icon"></i>Google+</a></li>
							<li><a href="https://www.facebook.com/stephenbaircom" target="_blank"><i class="icon-facebook icon"></i>Facebook</a></li>
	        			</ul>
	        		</li>
				</ul>
			</div> <!-- #main -->
            <?php include('../includes/footer.php') ?>
        </div> <!-- #main-container -->
    </body>
</html>