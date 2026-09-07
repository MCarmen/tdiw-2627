# TDIW
Tecnologies de desenvolupament per a Internet i Web

SESSIÓ DE PROBLEMES 0 – Tooling

## Local Requirements

None.

## Remote Requirements

We will not be working remotely.

## Working with the new branch

To work with the new branch, you have two options:

### Option 1: Create a subdirectory for each branch:
1. Create a subdirectory locally ``my_local_dir/pX``
2. From the directory ``pX`` you can either clone the whole repo and select the ``pX`` branch, or just clone the specific branch:
``` shell
cd my_local_dir/pX

#cloning the whole repo and afterwards position to the branch pX.
git clone https://github.com/MCarmen/tdiw-2627.git
#alternatively, clone just the branch pX.
git clone --branch pX --single-branch https://github.com/MCarmen/tdiw-2627.git
```

### Option 2: Fetch the new branch from your local repo
1. Go to the directory where you have cloned the ``https://github.com/MCarmen/tdiw-2627.git``repo and fetch the new branches.
``` shell
#From VSCode open a terminal and position to the directory where you have the repo
cd my_local_dir/tdiw-2627
git fetch
```

2. Now, from VSCode, you can checkout the new branch, or from the command line:
``` shell
git checkout pX
```
