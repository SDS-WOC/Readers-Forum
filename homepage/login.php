<html>
<head>
<style>
div.container {
    width: 100%;
    border: 5px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: left;
}

nav {
    float: right;
    max-width: 200px;
    margin: 0;
    padding: 1em;
}


article {
    margin-right: 190px;
    border-right: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>Athena</h1>
</header>

<nav>
  <h2> Login</h2>
  <form method="post" action="login.php">
    <label>Email ID</label>
      <input type ="text">
    <br><br>
      <label>Password</label>
      <input type ="password">
    <br><br>
      <input type="submit" name="login">
  </form>
  Not yet a member? <a href="register.php">Register here</a>
</nav>

<article>
  <h1>Welcome to Athena</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor nec sapien ut suscipit. Praesent porttitor risus dolor. Nullam dignissim magna dui, vel posuere libero bibendum ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse at tortor vel magna tristique porttitor eget eget diam. Proin nec ullamcorper lorem, id ullamcorper mauris. Pellentesque tempor orci id luctus pellentesque. Proin placerat fermentum elit, id mattis nulla fringilla in. Sed ut turpis felis.</p>
  <p>Duis gravida ligula eu cursus blandit. Praesent interdum odio erat, ac pretium dui finibus eget. Etiam quis tortor ligula. Morbi suscipit dui est, eu suscipit lorem convallis nec. Aliquam molestie mauris luctus, consequat turpis sed, vehicula tellus. Aliquam dignissim neque tortor, in tempor metus volutpat et. Vestibulum ac libero non velit tempor interdum. Sed nec mi sit amet odio blandit ultricies non a metus. Nulla eleifend porta purus. Nullam aliquet orci ac dolor elementum porttitor. Aliquam risus massa, malesuada id urna sed, hendrerit commodo mauris. Donec commodo gravida leo quis condimentum. Duis tempor dictum leo, vitae faucibus augue feugiat ac. Nulla vel justo maximus, condimentum quam id, luctus quam.</p>
</article>

<footer><center>copyright information</center></footer>

</div>

</body>
</html>
