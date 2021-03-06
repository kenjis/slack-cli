<?php

/*
 * This file is part of the slack-cli package.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\SlackCli\Command;

use CL\Slack\Payload\EmojiListPayload;
use CL\Slack\Payload\EmojiListPayloadResponse;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class EmojiListCommand extends AbstractApiCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('emoji:list');
        $this->setDescription('Returns a list of all the custom emoji for your Slack team');
        $this->setHelp(<<<EOT
The <info>emoji:list</info> command returns a list of all the custom emoji in your Slack team.

The emoji property contains a map of name/url pairs, one for each custom emoji used by the team.

The alias: <comment>pseudo-protocol</comment> will be used where the emoji is an alias, the string following the colon is
the name of the other emoji this emoji is an alias to.

For more information about the related API method, check out the official documentation:
<comment>https://api.slack.com/methods/emoji.list</comment>
EOT
        );
    }

    /**
     * @return EmojiListPayload
     */
    protected function createPayload()
    {
        $payload = new EmojiListPayload();

        return $payload;
    }

    /**
     * {@inheritdoc}
     *
     * @param EmojiListPayloadResponse $payloadResponse
     */
    protected function handleResponse($payloadResponse)
    {
        if ($payloadResponse->isOk()) {
            $emojis = $payloadResponse->getEmojis();
            $this->output->writeln(sprintf('Got <comment>%d</comment> emojis...', count($emojis)));
            if (!empty($emojis)) {
                $this->renderKeyValueTable($emojis, ['Name', 'URL']);
            }
        } else {
            $this->writeError(sprintf('Failed to fetch emojis: %s', lcfirst($payloadResponse->getErrorExplanation())));
        }
    }
}
