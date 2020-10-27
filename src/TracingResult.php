<?php

namespace BrightAlley\LighthouseApollo;

class TracingResult
{
    public string $queryText;

    /**
     * @var array{
     *     duration: int
     *     endTime: string
     *     startTime: string
     *     version: int
     *     execution: array{
     *         resolvers: array{
     *             duration: int
     *             parentType: string
     *             path: string
     *             returnType: string
     *             startOffset: int
     *         }[]
     *     }
     * }
     */
    public array $tracing;

    /**
     * Constructor.
     *
     * @param string $queryText
     * @param array $tracing
     */
    public function __construct(string $queryText, array $tracing)
    {
        $this->queryText = $queryText;
        $this->tracing = $tracing;
    }
}
