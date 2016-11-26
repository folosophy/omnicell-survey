<?php /* Template Name: New User */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
<?php wp_head(); ?>
</head>

<html>
<body>
<?php get_header(); ?>
<!-- Begin Page Content -->

<div class='popup'>
  <form id='new-user' class='light'>
    <div id='user-info' class='field-group'>
      <div class='grid'>
        <div class='half'>
          <h2>Your Information</h2>
          <p class='sm'>Please enter your user info:</p>
          <div class='field'>
            <input type='text' name='fname' placeholder='First Name*' required />
          </div>
          <div class='field'>
            <input type='text' name='lname' placeholder='Last Name*' required />
          </div>
          <div class='field'>
            <input type='text' name='facility-name' placeholder='Facility Name*' required />
          </div>
          <div class='field'>
            <input type='text' name='network-name' placeholder='Network Name*' required />
          </div>
          <div class='field'>
            <input type='text' name='position' placeholder='Position*' required />
          </div>
        </div>
        <div class='half'>
          <h2>Organization Types</h2>
          <p class='sm'>Select all that apply:</p>
          <div class='dvd'></div>
          <div>
            <?php $facilities = get_field('user_facility_types') ?>
            <?php echo var_dump($facilities) ?>
            <?php foreach ($facilities as $facility) : ?>

              <div class='field ldist'>
                <input type='checkbox' />
                <p class='sm'><?php echo $facility['name'] ?></p>
              </div>

            <?php endforeach ?>
          </div>
          <div class='dvd'></div>
        </div>
      </div>
      <div class='spacer m'></div>
      <div class='center'>
        <a class='button disabled next'>Next</a>
      </div>
    </div>
    <div id='user-credentials' class='field-group center'>
      <h2>Login Info</h2>
      <p>Please provide an email address, username, and password to create an account and begin the survey.</p>
      <div class='center'>
        <div class='field'>
          <input type='email' name='email' placeholder='Email' required />
        </div>
        <div class='field'>
          <input type='text' name='username' placeholder='Username' required />
        </div>
        <div class='field'>
          <input type='password' name='password' placeholder='Password' required />
        </div>
      </div>
      <div class='center'>
        <button type='submit' class='disabled'>Submit</button>
        <div class='response'></div>
      </div>
    </div>
  </form>
</div>

<!-- End Page Content -->
<?php get_footer(); ?>
</body>
</html>
