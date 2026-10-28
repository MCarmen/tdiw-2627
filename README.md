# TDIW
Tecnologies de desenvolupament per a Internet i Web

SESSIÓ DE PROBLEMES 8 – protocol HTTP: State Management

## Local Requirements

1. Locally, you will need to download the document p8_todo.xxx to fillout your answers. Chose one document format.

## Remote Requirements

2. We will use the Apache Server + PHP module you use in the labs:

  1. Start the fortyclient program.  
  2. Use the VSCode remote connection to connect to the lab using the command:  
   ```shell
   ssh -p 170 tdiw-XX@deic-dcX.uab.cat
   ```

  3. In the public_html directory, create the directory problems.
    ```text
    public_html/
    └── problems/
    ```

  4. In the public_html/problems directory, create a directory for each student of the group:
    ```text
    public_html/
    └── problems/
        ├── student1/
        └── student2/
    ```
  5. Optional: You can create a directory for     
## Working with the new branch

To work with the new branch, you have two options:

### Option 1: Create a subdirectory for each branch:
1. Create a subdirectory in your directory ``public_html/problems/student1/pX``
2. From the directory ``pX`` you can either clone the whole repo and select the ``pX`` branch, or just clone the specific branch:
``` shell
cd public_html/problems/studentX/pX
#cloning the whole repo and afterwards position to the branch pX.
git clone https://github.com/MCarmen/tdiw.git
#alternatively, clone just the branch pX.
git clone --branch pX --single-branch https://github.com/MCarmen/tdiw.git
```

### Option 2: Fetch the new branch from your local repo
1. Go to the directory where you have clone the ``https://github.com/MCarmen/tdiw.git``repo and fetch the new branches.
``` shell
#From VSCode open a terminal and position to the directory where you have the repo
cd public_html/problems/studentX/tdiw
git fetch
```

2. Now, from VSCode, you can checkout the new branch.
