<?php

declare(strict_types=1);

trigger_deprecation('php-etl/pipeline-contracts', '0.5', 'The "%s" class is deprecated, use "%s" instead.', 'Kiboko\\Contract\\Pipeline\\SchedulingInterface', \Kiboko\Contract\Satellite\SchedulingInterface::class);

/*
 * @deprecated since Satellite 0.2, use Kiboko\Contract\Satellite\SchedulingInterface instead.
 */
class_alias(\Kiboko\Contract\Satellite\SchedulingInterface::class, 'Kiboko\\Contract\\Pipeline\\SchedulingInterface');
