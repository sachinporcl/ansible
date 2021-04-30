<?php

namespace Rubix\ML\NeuralNet\CostFunctions;

use Tensor\Matrix;

/**
 * Cost Function
 *
 * @category    Machine Learning
 * @package     Rubix/ML
 * @author      Andrew DalPino
 */
interface CostFunction
{
    /**
     * Compute the loss score.
     *
     * @internal
     *
     * @param \Tensor\Matrix $output
     * @param \Tensor\Matrix $target
     * @return float
     */
    public function compute(Matrix $output, Matrix $target) : float;

    /**
     * Calculate the gradient of the cost function with respect to the output.
     *
     * @internal
     *
     * @param \Tensor\Matrix $output
     * @param \Tensor\Matrix $target
     * @return \Tensor\Matrix
     */
    public function differentiate(Matrix $output, Matrix $target) : Matrix;

    /**
     * Return the string representation of the object.
     *
     * @return string
     */
    public function __toString() : string;
}
