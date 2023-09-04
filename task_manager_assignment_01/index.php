<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1>Task Manager</h1>
    </div>
    <div class="content">
        <div class="add_new_task">
            <form action="add_task.php" class="form_add_task">
                <div class="single_form_item">
                    <label for="taskTitle">Task Title:</label>
                    <input type="text" name="taskTitle" placeholder="Enter the title of the task: ">
                </div>

                <div class="single_form_item">
                    <label for="taskDescription">Task Description:</label>
                    <input type="text" name="taskDescription" placeholder="Enter the description of the task: ">
                </div>



                <div class="single_form_button">
                    <input type="submit" value="Add Task">
                </div>

            </form>
        </div>
    </div>

    <h2 class="task_label">All of my tasks</h2>
    <div class="task_label_hint">Press the <i class="fa fa-close"></i> button to delete the todo.</div>
    <div class="show_all_task">

        <ul>

            <?php include("list_of_tasks.php"); ?>


        </ul>
    </div>
    <div class="footer">
        &copy; Sulav Parajuli
    </div>
</body>

</html>