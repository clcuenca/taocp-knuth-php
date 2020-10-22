# The Art of Computer Programming - Ruby

Algorithm Implementations that are contained within Donald Knuth's *'The Art of Computer Programming'* in Ruby.
The repository may have some implementations that are ahead of the current volume the repository is at, that may be due
to external interest in using the algorithm, but nevertheless included as to avoid writing the algorithm more than once.

This repository is for reference/example purposes, I do not claim to have written the formal definitions of the algorithms contained
in the book. That's obviously Knuth.

Feel free to comment/critique/improve/make fun of these implementations

## In Progress

* **Volume 1**

## Program Execution

All of the algorithm implementations are stored in their own directory with an included input file. The input.txt file contains test cases, and allows for additional test cases 
to be appended to the file.
Each of the algorithm implementations has support for stdin (so far) and can be used with input redirection to execute through all
of the test cases, so the only thing that should be edited is the input.txt file itself. 
To run a program use a terminal/console and type in the following within the corresponding directory:

```ruby
ruby <script_name>.rb < input.txt
```

So far this has been tested with cygwin, but the principle should hold for macOS & linux systems.
