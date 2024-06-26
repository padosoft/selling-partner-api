<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GeneratePlacementOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\GeneratePlacementOptionsResponse;

/**
 * generatePlacementOptions
 */
class GeneratePlacementOptions extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  GeneratePlacementOptionsRequest  $generatePlacementOptionsRequest  The `generatePlacementOptions` request.
     */
    public function __construct(
        protected string $inboundPlanId,
        public GeneratePlacementOptionsRequest $generatePlacementOptionsRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/placementOptions";
    }

    public function createDtoFromResponse(Response $response): GeneratePlacementOptionsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => GeneratePlacementOptionsResponse::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->generatePlacementOptionsRequest->toArray();
    }
}
