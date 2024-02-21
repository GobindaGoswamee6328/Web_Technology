<?php

include '../controller/process2.php'

?>
<!DOCTYPE html>
<html>
    <body>
    <h1> Create a HTML Form like following</h1>
        <form action = "" method = "POST">
            <fieldset>
                <legend>Order Information : </legend>
                <table>
                    <tr>
                        <td><label> Product: </label></td>
                        
                        <td><select id="products" name="products">
                            <option value="Product 1">Product 1</option>
                            <option value="Product 2">Product 2</option>
                            <option value="Product 3">Product 3</option>
                            <?php echo $productsError; ?> </td>
                            </select>
                    </tr>



                    <tr>
                        <td><label> Quantity: </label></td>
                        <td><input type="text" name="quantity">
                        <?php echo $quantityError; ?></td>
                    </tr>
                    


                    <tr>
                        <td><label> Full Name: </label></td>
                        <td><input type="text" name="name">
                        <?php echo $nameError; ?></td>
                    </tr>
                    


                    <tr>
                        <td><label> Email Address: </label></td>
                        <td><input type="text" name="email">
                        <?php echo $emailError; ?></td>
                    </tr>
                    
                        

                    <tr>
                        <td><label> Phone Number : </label></td>
                        <td><input type="text" name="nmbr">
                        <?php echo $nmbrError; ?></td>
                    </tr>
                    


                    <tr>
                        <td><label> Address: </label></td>
                        <td><textarea rows="5" cols="30" name="address"></textarea>
                        <?php echo $addressError; ?></td>
                    </tr>
                    
                        

                    <tr>
                        <td><label> Billing Address: </label></td>
                        <td><textarea rows="5" cols="30" name="bill"></textarea>
                        <?php echo $billError; ?></td>
    
                    </tr>
                    


                    <tr>
                      <td><label> Shipping Option: </label></td>
                      <td><input type="radio" name="option"  checked> Standard Shipping
                      <input type="radio" name="option"> Express Shipping(additional charges may apply)
                      <?php echo $optionError; ?></td>
                    </tr>
                    


                    <tr>
                    <td><label>Preferred Delivery Time :</label></td>
                    <td><select id = "preferred delivery time" name = "delivery">
                          <option value="Morning">Morning</option>
                          <option value="Afternoon">Afternoon</option>
                          <option value="Night">Night</option>
                        <?php echo $deliveryError; ?></td>
                    </select>
                    </tr>
                    



                    <tr>
                    <td><label>Special Instructions:</label></td>
                    <td><textarea rows="5" cols="30" name="instructor"></textarea>
                    <?php echo $instructorError; ?></td>
                    </tr>


                    <tr>
                    <td><input type="checkbox" name="ship">
                    <label>Request Express Shipping(additional charges may apply)</label></td>
                    <td><input type="checkbox" name="ship">
                    <label>Gift Wrapping(additional charges may apply)</label>
                    <?php echo $shipError; ?></td>
                    </tr>


                    <tr>
                    <td><label>I agree to the terms and conditions</label></td>
                    <td><input type="checkbox" name="term">
                    <?php echo $termError; ?></td>
                    </tr>

                    <tr>
                      <td><td><input type="submit" name="submit" value="Submit">
                      <input type="submit" name="reset" value="Reset"></td></td>
                    </tr>
                
                </table>

            </fieldset>
        </form>
    </body>
</html>