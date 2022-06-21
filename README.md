# Software Engineering Final
Final group project for Software Engineering at Texas A&M University - Central Texas.

**Contributors**
Cary Courson - Team Lead
Charisse Giles - Design Lead
Jason Booth (@Pseudohedron) - Development Lead
Wyatt Perry - Team Member
Luis Amador - Team Member

**Goals:**
- Create a digital documentation service to store SOAP notes for nurses and other medical professionals
- Service must not allow for changes to SOAP notes after they are submitted
- Intended to operate from tablets provided to the users
- Must have a user-friendly front-end that connects with a remote database to store sensitive information

## Steps for testing it yourself:

1. Unpack zipped files.

2. Move the current_final folder (containing the assets and style folders 
as well as various php and html files) to your MAMP directory to the htdocs folder:
MAMP\htdocs\current_final

3. Run the MAMP webserver.

4. Open a web browser and enter "localhost/current_final" into the address bar.

5. Login using the username "adam.alvarez" and password "password". Feel free to experiment with incorrect fields.

6. Now on the main form, click the pink expansive dropdowns to expand related categories. Fill out
all categories as you wish, however four specific fields must be filled as they are primary keys!

7. If done correctly, messages will appear where SOAP form fields are saved correctly. This is the end of the working program functions.

DO NOT LEAVE ANY OF THE FOLLOWING FIELDS EMPTY:
-----------------------------------------------
Employee ID - Under Subjective Section, required to be a numeric value.
PatientID - Under Plan Section, set to a numeric value. There are two instances of this field, the first one (under Medications header) must be filled.
SOAPID - Under Plan Section, set to a numeric value.
Vitals Date, Time - Under Plan Section, select any date and time using the interface.

If any fields that are required are left empty, the program will simply reload the SOAP form page.