# PHP Object Reference Bug

This repository demonstrates a common, subtle bug in PHP related to object references and their modification within functions.

The `bug.php` file shows the problematic code, which reassigns an object within a function, unexpectedly leaving the original object unchanged. The `bugSolution.php` demonstrates the correct approach: modifying the object's properties directly, without reassigning the object itself.

This example highlights the importance of understanding pass-by-reference and pass-by-value semantics in PHP when working with objects.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` and observe the unexpected output.
3. Run `bugSolution.php` to see the corrected behavior.