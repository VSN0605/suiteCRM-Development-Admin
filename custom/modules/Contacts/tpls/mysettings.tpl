
<form id="mysettings" action="index.php?module=Contacts&action=mysettings" name="mysettings" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="{{$username}}" required><br><br>

  <label for="password">Password:</label><br>
  <input style="width: 100%" type="password" id="password" name="password" value="{{$password}}" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value="{{$email}}"><br><br>
                   
  <label for="message">Message:</label><br>
  <textarea id="message" name="message" rows="4" cols="50">{{$message}}</textarea><br><br>
                   
  <input type="submit" id='submitbutton' name='submitbutton' value="Submit">
</form>