# SOAP Note Documentaion System
Final group project for Software Engineering at Texas A&M University - Central Texas. The front-end web page was created using HTML and CSS, and connects to a database using PHP and MAMP.

**Goals:**
- Create a digital documentation service to store SOAP notes for nurses and other medical professionals
- Service must not allow for changes to SOAP notes after they are submitted
- Intended to operate from tablets provided to the users
- Must have a user-friendly front-end that connects with a remote database to store sensitive information

### Showcase
At the login page, the user can enter their username and password. Includes checking between web page and database for correct user/pass combination. Text at the top of the page is intended for debugging purposes and would not be in the final product.
![login-page](/assets//testing/login-page.png)

After successfully logging in, the user is taken to the form creation page. From here, important information can be collected from the patient and inputted. Afterwards, the user submits the form and closes it.
![main-form](/assets/testing/main-form.gif)

## Steps for Testing

1. Download and install [MAMP](https://www.mamp.info/en/downloads/)

2. Download and unpack project files.

2. Move the "current_final folder" (containing the assets and style folders as well as various php and html files) to your MAMP directory to the htdocs folder: MAMP\htdocs\current_final

3. Run the MAMP webserver.

4. Open a web browser and enter "localhost/current_final" into the address bar.

5. Login using the test credentials "adam.alvarez" and "password". Feel free to experiment with incorrect fields.

6. Now on the main form, click the pink expansive dropdowns to expand related categories. Fill out all categories as you wish, however four specific fields must be filled as they are primary keys in the database.

7. If done correctly, messages will appear where SOAP form fields are saved correctly. This is the end of the working program functions.

### Fields not to be left empty:
- **Employee ID** - Under Subjective Section, required to be a numeric value.
- **PatientID** - Under Plan Section, set to a numeric value. There are two instances of this field, the first one (under Medications header) must be filled.
- **SOAPID** - Under Plan Section, set to a numeric value.
- **Vitals Date, Time** - Under Plan Section, select any date and time using the interface.

If any fields that are required are left empty, the program will simply reload the SOAP form page instead of submitting the form to the database.

### Contributors
- **Cary Courson** - Team Lead
- **Charisse Giles** - Design Lead
- **Jason Booth** @Pseudohedron - Development Lead
- **Wyatt Perry** - Team Member
- **Luis Amador** - Team Member