<?php namespace WebEd\Base\ThemesManagement\Console\Generators;

class MakeCriteria extends AbstractGenerator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:make:criteria
    	{name : The class name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Criteria';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../../resources/stubs/criteria/criteria.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return 'Criterias\\' . $this->argument('name');
    }
}
