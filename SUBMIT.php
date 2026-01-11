<?php
                    include 'conn.php';

                    if (isset($_POST['submit'])){
                        $name = $_POST['fname'];
                        $email_address = $_POST['email'];
                        $phone = $_POST['phone'];
                        if (isset($_POST['gender'])){
                            $gender = $_POST['gender'];
                        }else{
                            $gender = "";
                        }
                        $text = $_POST['text'];

                        if ($name != "" && $email_address != "" && $phone != "" && $gender != "" && $text != ""){

                            //send data 

                            $query = "INSERT INTO CONTATCS (name, email, phone, gender, comment) VALUES ('$name', '$email_address', '$phone', '$gender', '$text')";
                            $result = mysqli_query($conn, $query);
                            echo "Send data was successefully!!!";
                        }else{
                            echo "Please fill all the value!!!";
                        }
                    }

                ?>