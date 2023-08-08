
<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
<table>
    <tr>
        <td>
        Salution: 
        </td>
        <td>
        <input type='radio' name='salution' value='Mr.' id='mr' checked>
        <label for='mr'>Mr.</label>
        <input type='radio' name='salution' value='Ms.' id='ms'>
        <label for='ms'>Ms.</label>
        <input type='radio' name='salution' value='Mrs.' id='mrs'>
        <label for='mrs'>Ms.</label>
        <input type='radio' name='salution' value='Mdm.' id='mdm'>
        <label for='mdm'>Ms.</label>
        </td>
    </tr>
    <tr>
        <td>
        Name:
        </td>
        <td>
        <input type='text' name='name' size='30' id='name'><br>
        <span style= "color: red;"><?php echo $nameErr; ?></span>
        </td>
    </tr>
    <tr>
        <td>
        Email:
        </td>
        <td>
        <input type='text' name='email' size='30' id='emailxxxx'><br>
        <span style= "color: red;"><?php echo $emailErr; ?></span>
        </td>
    </tr>
    <tr>
        <td>
        Phone Number:
        </td>
        <td>
        +60-<input type='text' name='phone'  size='30'>
        </td>
    </tr>
    <tr>
        <td>
        Type of Enquiry:
        </td>
        <td>
        <input type='radio' name='enquiry' value='General Enquiry' id='general' checked>
        <label for='general'>General Enquiry</label>
        <input type='radio' name='enquiry' value='Complaints' id='complaints'>
        <label for='ms'>Complaints</label>
        <input type='radio' name='enquiry' value='Suggestions' id='suggestions'>
        <label for='ms'>Suggestions</label>
        </td>
    </tr>
    <tr>
        <td>
        Subject:
        </td>
        <td>
        <textarea name='subject' rows='10' cols='30'></textarea><br>
        <span style= "color: red;"><?php echo $subjectErr; ?></span>
        </td>
    </tr>
</table>

<br>
<input type='submit' value='Submit Now'>

</form>
