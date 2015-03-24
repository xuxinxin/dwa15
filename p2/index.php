<?php require('logic.php'); ?>
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title>XKCD Password Generator</title>
	<link href="style.css" rel="stylesheet">
</html>
</head>
<body>
    <div class="wrapper">
      <div class="wrapper-inner">
        <div class="container">
          <div class="masthead">
            <div class="inner"> 
              <h1 class="masthead-brand"><a href="http://xkcd.com/936/">XKCD</a> Password Generator</h1>
            </div>
          </div>
          <form action="index.php" method="POST" name="formgenerate">
          <div class="inner content">
            <p class="lead">Generate a random password <i><b>xkcd</b></i> style from a list of 50,253 words</p>
            <p id="result"><?php 
            //test
            echo generate_password($words,$numbers,$separator);
            ?></p>
            <div class=" lead btn btn-default btn-lg btn-setting btnmargin" id="set">Options</div>
            <p class="lead btnmargin" id="button-container"><button type="submit" id="btngenerate" class="btn btn-lg btn-default">Generate</button></p>

          <fieldset>
            <legend>Options</legend>
            <div class="field">
            <label>Words</label>
            <select name="num_of_words">
              <option value="1" <?php if($words===1) echo "selected";?>>1</option>
              <option value="2" <?php if($words===2) echo "selected";?>>2</option>
              <option value="3" <?php if($words===3) echo "selected";?>>3</option>
              <option value="4" <?php if($words===4) echo "selected";?>>4</option>
              <option value="5" <?php if($words===5) echo "selected";?>>5</option>
              <option value="6" <?php if($words===6) echo "selected";?>>6</option>
            </select>
            </div>
            
            <div class="field">
            <label>Separator</label>
            <select name="separatorchar" >
              <option value="-" <?php if($separator==="-") echo "selected";?>>-</option>
              <option value="*" <?php if($separator==="*") echo "selected";?>>*</option>
            </select>
            </div>

            <div class="field">
            <label>Numbers</label>
            <select name="num_of_numbers">
              <option value="0" <?php if($numbers===0) echo "selected";?>>0</option>
              <option value="1" <?php if($numbers===1) echo "selected";?>>1</option>
            </select>
            </div>
          </fieldset>

          </div>
          </form>

          <div class="mastfoot">
            <div class="inner">
            <p>
               Password Generator © 2014 created by XuXinxin
           </p>
            </div>
          </div>
          

        </div>
      </div>
    </div>
   
     
     <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
     <script src="set.js"></script>
     <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>