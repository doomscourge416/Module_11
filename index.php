<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<!--    <div id="tabletsheet">
        <div id="firstRow">
            <div id="blankDiv" class="tabletPart">
            </div>
            <div id="true" class="tabletPart">
            </div>
            <div id="false" class="tabletPart">
            </div>
            <div id="1" class="tabletPart">
            </div>
            <div id="0" class="tabletPart">
            </div>
            <div id="-1" class="tabletPart">
            </div>
            <div id="string1" class="tabletPart">
            </div>
            <div id="divNull" class="tabletPart">
            </div>
            <div id="divPhp" class="tabletPart">
            </div>
        </div>
        <div id="secondRow">
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
            <div class="tabletPart"></div>
        </div>      

        
    </div>

-->
    <h1>Задание 1 </h1>
    
    <br>
    <table>
        <thead>
          <tr>
            <th>A</th>
            <th>B</th>
            <th> !A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
        </thead>
        
        <tbody>
            
          <tr>
            
            <td>
                <?php
                    $a = 0;
                    $b = 0;
                    echo $a;
                    
                ?>
            </td>
            <td><?php 
            echo $b ?>
            </td>
            <td><?php echo !$a ?></td>
            <td><?php echo $a || $b ?></td>
            <td><?php echo $a && $b?></td>
            <td><?php echo $a xor $b?></td>


          </tr>

          <tr>
            
            <td>
                <?php
                    $a = 0;
                    $b = 1;
                    echo $a;
                    
                ?>
            </td>
            <td><?php 
            echo $b ?>
            </td>
            <td><?php echo !$a ?></td>
            <td><?php echo $a || $b ?></td>
            <td><?php echo $a && $b?></td>
            <td><?php echo $a xor $b?></td>


          </tr>

          <tr>
            
            <td>
                <?php
                    $a = 1;
                    $b = 0;
                    echo $a;
                    
                ?>
            </td>
            <td><?php 
            echo $b ?>
            </td>
            <td><?php echo !$a ?></td>
            <td><?php echo $a || $b ?></td>
            <td><?php echo $a && $b?></td>
            <td><?php echo $a xor $b?></td>


          </tr>

          <tr>
            
            <td>
                <?php
                    $a = 1;
                    $b = 1;
                    echo $a;
                    
                ?>
            </td>
            <td><?php 
            echo $b ?>
            </td>
            <td><?php echo !$a ?></td>
            <td><?php echo $a || $b ?></td>
            <td><?php echo $a && $b?></td>
            <td><?php echo $a xor $b?></td>


          </tr>
          
        </tbody>
      </table>
      <br>
      <br>
      <br>
    <h1>Задание 2: «Гибкое сравнение в PHP»</h1>
    <br>
    <table>
        <thead>
            <tr>


                <th>
                    
                </th>

                <th>
                    true
                </th>

                <th>
                    false
                </th>

                <th>
                    1
                </th>

                <th>
                    0
                </th>

                <th>
                    -1
                </th>

                <th>
                    "1"
                </th>

                <th>
                    null
                </th>

                <th>
                    "php"
                </th>



            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php
                    $a1 = true;
                    $b1 = true;
                    $a2 = false;
                    $b2 = false;
                    $a3 = 1;
                    $b3 = 1;
                    $a4 = 0;
                    $b4 = 0
                    -$a5 = 1;
                    -$b5 = 1;
                    $a6 = '1';
                    $b6 = '1';
                    $a7 = null;
                    $b7 = null;
                    $a8 = 'php';
                    $b8 = 'php';

                ?>true</td>
                <td><?php echo $a1 == $b1 ?></td>
                <td><?php echo $a1 == $b2 ?></td>
                <td><?php echo $a1 == $b3 ?></td>
                <td><?php echo $a1 == $b4 ?></td>
                <td><?php echo $a1 == $b5 ?></td>
                <td><?php echo $a1 == $b6 ?></td>
                <td><?php echo $a1 == $b7 ?></td>
                <td><?php echo $a1 == $b8 ?></td>
                
            </tr>
            <tr>
                <td>false</td>
                <td><?php echo $a2 == $b1 ?></td>
                <td><?php echo $a2 == $b2 ?></td>
                <td><?php echo $a2 == $b3 ?></td>
                <td><?php echo $a2 == $b4 ?></td>
                <td><?php echo $a2 == $b5 ?></td>
                <td><?php echo $a2 == $b6 ?></td>
                <td><?php echo $a2 == $b7 ?></td>
                <td><?php echo $a2 == $b8 ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $a3 == $b1 ?></td>
                <td><?php echo $a3 == $b2 ?></td>
                <td><?php echo $a3 == $b3 ?></td>
                <td><?php echo $a3 == $b4 ?></td>
                <td><?php echo $a3 == $b5 ?></td>
                <td><?php echo $a3 == $b6 ?></td>
                <td><?php echo $a3 == $b7 ?></td>
                <td><?php echo $a3 == $b8 ?></td>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo $a4 == $b1 ?></td>
                <td><?php echo $a4 == $b2 ?></td>
                <td><?php echo $a4 == $b3 ?></td>
                <td><?php echo $a4 == $b4 ?></td>
                <td><?php echo $a4 == $b5 ?></td>
                <td><?php echo $a4 == $b6 ?></td>
                <td><?php echo $a4 == $b7 ?></td>
                <td><?php echo $a4 == $b8 ?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php echo $a5 == $b1 ?></td>
                <td><?php echo $a5 == $b2 ?></td>
                <td><?php echo $a5 == $b3 ?></td>
                <td><?php echo $a5 == $b4 ?></td>
                <td><?php echo $a5 == $b5 ?></td>
                <td><?php echo $a5 == $b6 ?></td>
                <td><?php echo $a5 == $b7 ?></td>
                <td><?php echo $a5 == $b8 ?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php echo $a6 == $b1 ?></td>
                <td><?php echo $a6 == $b2 ?></td>
                <td><?php echo $a6 == $b3 ?></td>
                <td><?php echo $a6 == $b4 ?></td>
                <td><?php echo $a6 == $b5 ?></td>
                <td><?php echo $a6 == $b6 ?></td>
                <td><?php echo $a6 == $b7 ?></td>
                <td><?php echo $a6 == $b8 ?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php echo $a7 == $b1 ?></td>
                <td><?php echo $a7 == $b2 ?></td>
                <td><?php echo $a7 == $b3 ?></td>
                <td><?php echo $a7 == $b4 ?></td>
                <td><?php echo $a7 == $b5 ?></td>
                <td><?php echo $a7 == $b6 ?></td>
                <td><?php echo $a7 == $b7 ?></td>
                <td><?php echo $a7 == $b8 ?></td>
            </tr>
            <tr>
                <td>"php"</td>
                <td><?php echo $a8 == $b1 ?></td>
                <td><?php echo $a8 == $b2 ?></td>
                <td><?php echo $a8 == $b3 ?></td>
                <td><?php echo $a8 == $b4 ?></td>
                <td><?php echo $a8 == $b5 ?></td>
                <td><?php echo $a8 == $b6 ?></td>
                <td><?php echo $a8 == $b7 ?></td>
                <td><?php echo $a8 == $b8 ?></td>
            </tr>
        </tbody>
    </table>
    <h1>Задание 3: «Жёсткое сравнение в PHP»</h1>
    <br>
    <table>
        <thead>
            <tr>


                <th>
                    
                </th>

                <th>
                    true
                </th>

                <th>
                    false
                </th>

                <th>
                    1
                </th>

                <th>
                    0
                </th>

                <th>
                    -1
                </th>

                <th>
                    "1"
                </th>

                <th>
                    null
                </th>

                <th>
                    "php"
                </th>



            </tr>
        </thead>
        <tbody>
            <tr>
                <td>true</td>
                <td><?php echo $a1 === $b1 ?></td>
                <td><?php echo $a1 === $b2 ?></td>
                <td><?php echo $a1 === $b3 ?></td>
                <td><?php echo $a1 === $b4 ?></td>
                <td><?php echo $a1 === $b5 ?></td>
                <td><?php echo $a1 === $b6 ?></td>
                <td><?php echo $a1 === $b7 ?></td>
                <td><?php echo $a1 === $b8 ?></td>
                
            </tr>
            <tr>
                <td>false</td>
                <td><?php echo $a2 === $b1 ?></td>
                <td><?php echo $a2 === $b2 ?></td>
                <td><?php echo $a2 === $b3 ?></td>
                <td><?php echo $a2 === $b4 ?></td>
                <td><?php echo $a2 === $b5 ?></td>
                <td><?php echo $a2 === $b6 ?></td>
                <td><?php echo $a2 === $b7 ?></td>
                <td><?php echo $a2 === $b8 ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $a3 === $b1 ?></td>
                <td><?php echo $a3 === $b2 ?></td>
                <td><?php echo $a3 === $b3 ?></td>
                <td><?php echo $a3 === $b4 ?></td>
                <td><?php echo $a3 === $b5 ?></td>
                <td><?php echo $a3 === $b6 ?></td>
                <td><?php echo $a3 === $b7 ?></td>
                <td><?php echo $a3 === $b8 ?></td>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo $a4 === $b1 ?></td>
                <td><?php echo $a4 === $b2 ?></td>
                <td><?php echo $a4 === $b3 ?></td>
                <td><?php echo $a4 === $b4 ?></td>
                <td><?php echo $a4 === $b5 ?></td>
                <td><?php echo $a4 === $b6 ?></td>
                <td><?php echo $a4 === $b7 ?></td>
                <td><?php echo $a4 === $b8 ?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php echo $a5 === $b1 ?></td>
                <td><?php echo $a5 === $b2 ?></td>
                <td><?php echo $a5 === $b3 ?></td>
                <td><?php echo $a5 === $b4 ?></td>
                <td><?php echo $a5 === $b5 ?></td>
                <td><?php echo $a5 === $b6 ?></td>
                <td><?php echo $a5 === $b7 ?></td>
                <td><?php echo $a5 === $b8 ?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php echo $a6 === $b1 ?></td>
                <td><?php echo $a6 === $b2 ?></td>
                <td><?php echo $a6 === $b3 ?></td>
                <td><?php echo $a6 === $b4 ?></td>
                <td><?php echo $a6 === $b5 ?></td>
                <td><?php echo $a6 === $b6 ?></td>
                <td><?php echo $a6 === $b7 ?></td>
                <td><?php echo $a6 === $b8 ?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php echo $a7 === $b1 ?></td>
                <td><?php echo $a7 === $b2 ?></td>
                <td><?php echo $a7 === $b3 ?></td>
                <td><?php echo $a7 === $b4 ?></td>
                <td><?php echo $a7 === $b5 ?></td>
                <td><?php echo $a7 === $b6 ?></td>
                <td><?php echo $a7 === $b7 ?></td>
                <td><?php echo $a7 === $b8 ?></td>
            </tr>
            <tr>
                <td>"php"</td>
                <td><?php echo $a8 === $b1 ?></td>
                <td><?php echo $a8 === $b2 ?></td>
                <td><?php echo $a8 === $b3 ?></td>
                <td><?php echo $a8 === $b4 ?></td>
                <td><?php echo $a8 === $b5 ?></td>
                <td><?php echo $a8 === $b6 ?></td>
                <td><?php echo $a8 === $b7 ?></td>
                <td><?php echo $a8 === $b8 ?></td>
            </tr>
        </tbody>
    </table>
    <h2>Вывод:</h2>
    <span>Данные таблицы сравнений показывают нам, что к сравнению в PHP не стоит подходить бездумно, так как
    если вы не уверены (или не знаете) результата сравнения заранее, то это может привести к неприятным сюрпризам далее по программе!
    </span>
</body>
</html>