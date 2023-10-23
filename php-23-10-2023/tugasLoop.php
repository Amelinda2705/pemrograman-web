<?php

// pertanyaan 1
echo "Pertanyaan 1 <br>";
for ($i = 5; $i <= 100; $i += 2) {
    echo "$i ";
};

// pertanyaan 2 
echo "<br><br>Pertanyaan 2 <br>";
for ($i = 0; $i <= 100; $i += 8){
    echo "$i ";
} 

// pertanyaan 3
echo "<br><br>Pertanyaan 3 <br>";

echo "Looping 1 <br>";
for ($i = 2; $i <= 100; $i += 2) {
    echo "$i - aku jago koding <br>";
}

echo "Looping 2 <br>";
for ($i = 99; $i >= 1; $i -=2) {
    echo "$i - aku seorang web developer <br>";
} 

// pertanyaan 4
echo "<br><br>Pertanyaan 4 <br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        if ($i % 3 == 0) {
            echo "{$i}. I love coding <br>";
        } else {
            echo "{$i}. Hoby aku adalah koding <br>";
        }
    } else if ($i % 2 == 0) {
        echo "{$i}. Aku sangat senang koding <br>";
    } 
}


