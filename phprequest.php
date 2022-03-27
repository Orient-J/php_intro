<!DOCTYPE html>
<html>
    <head>
        <title>Php Request</title>
    </head>
    <body>

        <ul>

            <li>get (url) </li>
            <li>post</li>

        </ul>

        <a href="./phprespond.php?name=kyawpyaesone&age=18&status=single">to server</a>

        <h4> url ? key = value & key = value & key = value</h4>

        <hr/>

        <h3>Get method with form tag</h3>

        <form action="./phprespond.php?gf=mama" method="post" enctype="multipart/form-data">

            <input type="text" id="name" name="name" class="name" placeholder="enter your name" />
            <input type="text" id="age" name="age" class="age" placeholder="enter your age" />
            <input type="text" id="job" name="job" class="job" placeholder="enter your job" />
            
            <input type="file" id="photo" name="photo" class="photo" placehoder="choose your photo" />

            <input type="submit" />

        </form>    

        <!-- get is default  -->

        <hr/>

        <!-- <h3>Post method with form tag</h3>

        <form action="./phprespond.php" method="post">

            <input type="text" id="user" value="Kyaw Gyi" />
            <input type="text" id="age" value=19 />
            <input type="text" id="job" value="Software Enginner" />

            <button type="submit">Submit me</button>

        </form> -->

        <!-- post method cannot be used in a tag -->

    </body>
</html>