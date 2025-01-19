# PHP's loose comparison with NaN

This repository demonstrates an uncommon bug in PHP related to the comparison of NaN (Not a Number) values using loose and strict comparison operators.  NaN, by definition, is not equal to itself.  This behavior can lead to unexpected results in PHP if not handled correctly.

## The Problem

PHP's loose comparison (`==`) and strict comparison (`!==`) operators behave unexpectedly with NaN.  The `==` operator should not return true, and the `!==` should return true. However, it returns false for both comparison. This is often missed during code review and testing.

## Solution

The solution involves using the `is_nan()` function to explicitly check for NaN before performing comparisons. This ensures that the comparison behaves as expected even when dealing with NaN values.