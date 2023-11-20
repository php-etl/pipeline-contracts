<?php

declare(strict_types=1);

trigger_deprecation('php-etl/pipeline-contracts', '0.5', 'The "%s" class is deprecated, use "%s" instead.', 'Kiboko\\Contract\\Pipeline\\RunnableInterface', \Kiboko\Contract\Satellite\RunnableInterface::class);

/*
 * @deprecated since Satellite 0.2, use Kiboko\Contract\Satellite\RunnableInterface instead.
 */
class_alias(\Kiboko\Contract\Satellite\RunnableInterface::class, 'Kiboko\\Contract\\Pipeline\\RunnableInterface');
