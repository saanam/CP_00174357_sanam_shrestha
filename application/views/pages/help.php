<!--this is help page for web app-->
<!-- start of card section-->
<div class="card card-4">
    <div class="card-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Pinned Notes</span>
            </button>

        </div>
    </nav>
    <!--name of this page as title-->
        <h2 class="text"><strong><?= $title; ?></strong></h2><hr>
            <div class="card">
            <!-- question-->
                <div class=" text card-header">
                    <strong>How to troubleshoot crashing issues</strong>
                </div>
                <!--answer-->
                <div class="card-body">
                    If the app is crashing, try working through these steps until the issue is resolved:<br />
                    <strong>•	Restart Application</strong><br />
                    <strong>•	Restart your computer or device</strong><br />
                    <strong>•	Check Help & Learning </strong>- If app is displaying an error message when If none of
                     these suggestions help, please contact us. <br />
                </div>
                <!-- question-->
                <div class="text card-header">
                    <strong>How to print notes </strong>
                </div>
                <!--answer-->
                <div class="card-body">
                    <strong>Windows and Mac</strong><br />
                    1.	Select the note you wish to print<br />
                    2.	Go to browser menu and there you will find <strong>Print</strong> option. <br />
                </div>
                <!-- question-->
                <div class="text card-header">
                    <strong>How to check spelling </strong>
                </div>
                <!--answer-->
                <div class="card-body">
                    If a word in your note doesn't match your device's dictionary, the word will be called out with a red 
                    squiggled underline. Some of our apps are able to spell check an entire note.<br />
                    <strong>Mac</strong><br />
                    Select the note and click in the note editor to begin editing. Check the spelling of that note by 
                    clicking Edit > Spelling and Grammar from the menu bar.<br />
                </div>
                <!-- question-->
                <div class="text card-header">
                    <strong>How to organize notes into different notebooks </strong>
                </div>
                <!--answer-->
                <div class="card-body">
                    Notebooks are the most common way of organizing notes and are commonly used to separate notes
                     by notebooks. For example, you might create one notebook called 'Work Notes' and one called 'Personal Notes'
                      to keep these types of notes separate and easier to find.<br />
                </div>
                <!-- question-->
                <div class="text card-header">
                    <strong>How to find and recover deleted notes</strong>
                </div>
                <!--answer-->
                    <div class="card-body"> 
                        Once you delete any note it will directly send to <strong>trash</strong>. 
                        You can access <strong>trash</strong> by clicking on <strong>Profile</strong>
                        and in <strong>trash</strong> section. but once you have deleted notes 
                        from <strong>trash</strong> those files cannot be recovered. You can always back up notes when you want by 
                        going to profile and in export data.<br />
                        What to do if content is missing from a note <br />
                        If content inside a note becomes lost or corrupted, try the following troubleshooting steps:.<br />
                        <strong>1.	Search for conflicts:</strong> Try searching for notebooks titled 'Conflicting Changes.
                        ' Open any notes you find inside and check for your missing content. <br />
                        <strong>2.	Recover from backup: </strong>If you have a backup of the note, you can import it back into app.<br />
                    </div>